<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

use App\Posts;

class FrontEndController extends Controller
{
    public function Product(){
        $products = Product::all();
        return view('products')->with('products',$products);
    }
    public function blogs(){
        $posts = Posts::all();
        return view('blog')->with('posts',$posts);
    }
}
