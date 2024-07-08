<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddProductController extends Controller
{
    public function index()
    {
        return view('Admin.add-product');
    }

    public function store(Request $request)
    {
        // Validate incoming request
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required',
            'imgpath' => 'image|nullable|max:1999',
        ]);
    
        // Handle file upload
        if ($request->hasFile('imgpath')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('imgpath')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('imgpath')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload image to specific category directory
            $categoryDirectory = 'public/assets/img/Project-images/' . $request->category;
            $path = $request->file('imgpath')->storeAs($categoryDirectory, $fileNameToStore);
    
            // Image path to store in database
            $imgpath = 'storage/assets/img/Project-images/' . $request->category . '/' . $fileNameToStore;
        } else {
            // If no image is uploaded, set a default image or leave it null
            $imgpath = null;
        }
    
        // Insert product into database
        DB::table('_category')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'category' => $request->category,
            'price' => $request->price,
            'regular_price' => 0.00, // Provide a default value for regular_price
            'imgpath' => $imgpath,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    
        // Redirect back to the product list with a success message
        return redirect()->route('product')->with('success', 'Product added successfully.');
    }
    
}
