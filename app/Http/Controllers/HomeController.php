<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Posts;

use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')
        ->with('posts_count',Posts::all()->count())
        ->with('category_count',Category::all()->count())
        ->with('products_count',Product::all()->count());
    }
    public function welcome(){
        $categories = Category::all();
       return view('welcome')->with('categories',$categories); 
    }
  
}
