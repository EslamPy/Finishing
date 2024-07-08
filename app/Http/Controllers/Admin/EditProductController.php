<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EditProductController extends Controller
{
    // Method to fetch and display product details for editing
    public function edit($id)
    {
        // Fetch the product details based on the ID
        $product = DB::table('_category')->where('id', $id)->first();
        // Pass the product data to the view
        return view('Admin.edit-product', compact('product'));
    }

    // Method to handle the product update
    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required', // Product name is required
            'description' => 'required', // Product description is required
            'category' => 'required', // Category is required
            'price' => 'required', // Price is required
            'imgpath' => 'image|nullable|max:1999', // Validate the image if it's present
        ]);

        // Initialize the imgpath with the current image path
        $imgpath = $request->input('current_imgpath');

        // Check if a new image has been uploaded
        if ($request->hasFile('imgpath')) {
            // Get the original filename with extension
            $filenameWithExt = $request->file('imgpath')->getClientOriginalName();
            // Extract the filename without extension
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Extract the file extension
            $extension = $request->file('imgpath')->getClientOriginalExtension();
            // Create a new filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Define the directory path based on category
            $categoryDirectory = 'public/assets/img/Project-images/' . $request->category;
            // Store the file in the defined directory
            $path = $request->file('imgpath')->storeAs($categoryDirectory, $fileNameToStore);

            // Update the imgpath to point to the public storage path
            $imgpath = 'storage/assets/img/Project-images/' . $request->category . '/' . $fileNameToStore;

            // Fetch the current product to get the old image path
            $product = DB::table('_category')->where('id', $id)->first();
            // Delete the old image if it exists
            if ($product->imgpath) {
                Storage::delete('public/' . $product->imgpath);
            }
        }

        // Update the product details in the database
        DB::table('_category')->where('id', $id)->update([
            'name' => $request->name, // Update name
            'description' => $request->description, // Update description
            'category' => $request->category, // Update category
            'price' => $request->price, // Update price
            'imgpath' => $imgpath, // Update image path
        ]);

        // Redirect back to the product list with a success message
        return redirect()->route('product')->with('success', 'Product updated successfully.');
    }
}