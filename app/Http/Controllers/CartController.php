<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
class CartController extends Controller
{
    public function index()
    {
        // dd(session()->all());
        // Retrieve cart items from session or database
        $cartItems = session('cart', []);

        // Calculate subtotal, shipping, and total
        $subtotal = 0;
        if (!empty($cartItems)) {
            foreach ($cartItems as $item) {
                $subtotal += $item['price'] * $item['quantity'];
            }
            $shipping = 45; // Assuming fixed shipping cost
            $total = $subtotal + $shipping;
        } else {
            $shipping = 0; // Set shipping to 0 if there are no items
            $total = 0;
        }

        return view('cart', [
            'cartItems' => $cartItems,
            'subtotal' => $subtotal,
            'shipping' => $shipping,
            'total' => $total,
        ]);
    }

    public function removeFromCart(Request $request)
    {
        $productId = $request->input('product_id');

        // Logic to remove the product from the cart
        // Retrieve cart items from session
        $cartItems = session('cart', []);

        // Filter out the product to be removed
        $cartItems = array_filter($cartItems, function ($item) use ($productId) {
            return $item['id'] != $productId;
        });

        // Update the cart in the session
        session(['cart' => $cartItems]);

        // Check if cart is empty
        if (empty($cartItems)) {
            // Redirect to home page if cart is empty
            return redirect()->route('welcome');
        }
        // Return a response indicating success
        return response()->json(['message' => 'Product removed from cart'], 200);
    }

    public function addToCart(Request $request)
    {
        // Retrieve product details from the request
        $productId = $request->input('product_id');
        $product = Category::find($productId);

        // Retrieve cart items from session
        $cartItems = session('cart', []);

        // Check if the product is already in the cart
        $index = $this->findProductIndexInCart($cartItems, $productId);

        if ($index !== false) {
            // Product already exists in cart, increment quantity
            $cartItems[$index]['quantity']++;
        } else {
            // Product doesn't exist in cart, add it
            $cartItems[] = [
                'id' => $product->id,
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1, // Initially set quantity to 1
                'image' => $product->imgpath,
            ];
        }

        // Update the cart in the session
        session(['cart' => $cartItems]);

        // Redirect to cart page
        return redirect()->route('cart');
    }

    // Helper function to find index of a product in cart
    private function findProductIndexInCart($cartItems, $productId)
    {
        foreach ($cartItems as $index => $item) {
            if ($item['id'] == $productId) {
                return $index;
            }
        }
        return false;
    }

    public function updateCart(Request $request)
    {
        // Retrieve quantities from the form submission
        $quantities = $request->input('quantity');

        // Retrieve cart items from session
        $cartItems = session('cart', []);

        // Update quantities in the cart session
        foreach ($cartItems as $index => $item) {
            if (isset($quantities[$item['id']])) {
                $cartItems[$index]['quantity'] = $quantities[$item['id']];
            }
        }

        // Calculate subtotal, shipping, and total based on updated quantities
        $subtotal = 0;
        if (!empty($cartItems)) {
            foreach ($cartItems as $item) {
                $subtotal += $item['price'] * $item['quantity'];
            }
            $shipping = 45; // Assuming fixed shipping cost
            $total = $subtotal + $shipping;
        } else {
            $shipping = 0; // Set shipping to 0 if there are no items
            $total = 0;
        }

        // Update the cart in the session
        session(['cart' => $cartItems]);

        // Redirect back to the cart page with updated totals
        return redirect()->route('cart')->with([
            'subtotal' => $subtotal,
            'shipping' => $shipping,
            'total' => $total,
        ]);
    }
}
