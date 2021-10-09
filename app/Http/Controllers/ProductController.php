<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    public function index(Request $request) 
    {
        if($request->category != null) {
            $category = $request->category;
        } else {
            $category = 1;
        }
        $product = Product::where([['category', $category]])->with('cat')->paginate(10);
        $category = Category::all();
        return view('/product', ['product' => $product, 'category' => $category]);
    }
}
