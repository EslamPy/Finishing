<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function show($id = null)
    {
        if ($id === null) {
            return abort(404);
        }

        $item = DB::table('_category')->where('id', $id)->first();

        if (!$item) {
            return abort(404);
        }

        $relatedItems = DB::table('_category')->where('id', '!=', $id)->take(3)->get();

        return view('products', ['item' => $item, 'relatedItems' => $relatedItems]);
    }
}
