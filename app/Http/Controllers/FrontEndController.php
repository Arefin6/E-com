<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class FrontEndController extends Controller
{
    public function Product(){
        $products = Product::all();
        return view('products')->with('products',$products);
    }
}
