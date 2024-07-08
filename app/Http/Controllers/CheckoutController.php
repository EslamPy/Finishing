<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        // Example calculation for shipping cost (adjust as per your business logic)
        $shipping = 45.00; // Replace with your actual shipping cost calculation logic

        // Retrieve other necessary data from session or database
        $subtotal = session('subtotal', 0);
        $total = $subtotal + $shipping;

        // Retrieve cart items from session or database
        $cartItems = session('cart', []);

        // Pass data to the checkout view
        return view('checkout', compact('cartItems', 'subtotal', 'shipping', 'total'));
    }

    // public function removeFromCart($id)
    // {
    //     // Retrieve cart items from session
    //     $cartItems = session('cart', []);

    //     // Remove the item with the given ID from the cart
    //     unset($cartItems[$id]);

    //     // Update the cart session data
    //     session(['cart' => $cartItems]);

    //     // Redirect back to the checkout page (or wherever appropriate)
    //     return redirect()->route('checkout')->with('success', 'Item removed from cart.');
    // }
}
