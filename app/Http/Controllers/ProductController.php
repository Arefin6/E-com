<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Product;

use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('admin.products.index')->with('products',Product::all());;;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create')->with('categories',Category::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
			
            'image'   => 'required|image',
			
            'description'   => 'required',

		    'category_id' => 'required',

            'shortDescription' => 'required',
            
            'price' => 'required',

            'weight' => 'required',

        ]);

        $img = $request->image;

        $img_new_name = time().$img->getClientOriginalName();

        $img->move('uploads/products', $img_new_name);

        $product = Product::create([
			
            'name' => $request->name,
			
			'image' => 'uploads/products/'.$img_new_name,
			
            'description' => $request->description,
            
            'category_id'=>$request->category_id,

            'short_description'=>$request->shortDescription,

            'price'=>$request->price,

            'weight'=>$request->weight,
            
        ]);

        Session::flash('success','event added successfully');

        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);

        return view('admin.products.edit')
        ->with('product',$product)
        ->with('categories',Category::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
			
            'image'   => 'required|image',
			
            'description'   => 'required',

		    'category_id' => 'required',

            'shortDescription' => 'required',
            
            'price' => 'required',

            'weight' => 'required',

        ]);

        $product=Product::find($id);
		
		if($request->hasfile('image')){
			
			
        $image = $request->image;

        $image_new_name = time().$image->getClientOriginalName();

        $image->move('uploads/products', $image_new_name);
			
		$product->image = 'uploads/products/'.$image_new_name;	
			
		}
		
		 $product->name= $request->name;
		
         $product-> description= $request->description;

         $product->short_description = $request->shortDescription;
         
         $product->price = $request->price;

         $product->category_id = $request->category_id;

         $product->weight = $request->weight;

		 $product->save();
		
		

         return redirect()->route('product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
		
		$product->delete();

         return redirect()->back();
    }
}
