<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardProduct extends Controller
{
    public function index()
    {
        // Fetch data from the database
        $products = DB::table('_category')->get();
        
        // Pass the data to the view
        return view('Admin.products', compact('products'));
    }

    public function delete(Request $request)
    {
        // Get the array of product IDs from the request
        $productIds = $request->input('product_ids');

        if (!empty($productIds)) {
            // Delete the selected products
            DB::table('_category')->whereIn('id', $productIds)->delete();

            // Redirect back with success message
            return redirect()->route('product')->with('success', 'Selected products have been deleted successfully.');
        }

        // Redirect back with error message
        return redirect()->route('product')->with('error', 'No products were selected.');
    }

    public function deleteSingle($id)
    {
        // Delete the single product
        DB::table('_category')->where('id', $id)->delete();

        // Redirect back with success message
        return redirect()->route('product')->with('success', 'Product has been deleted successfully.');
    }
}
