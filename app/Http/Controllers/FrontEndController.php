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

    public function singlePost($slug){
		
		$post = Posts::where('slug',$slug)->first();

        return view('singleBlog')->with('post',$post);
    }  
    
    public function checkout(){
    
       return view('checkout'); 
    }


    public function login(){
        return view('login');
    }
    public function signup(){
        return view('register');
    }

}
