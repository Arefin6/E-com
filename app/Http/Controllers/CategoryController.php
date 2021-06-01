<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use App\Category;

class CategoryController extends Controller
{

    public function index (){
      return view('admin.category.index')->with('categories', Category::all());
    }
    public function  create(){
      return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|image',
        ]);

        $featured = $request->image;

        $featured_new_name = time().$featured->getClientOriginalName();

        $featured->move('uploads/category', $featured_new_name);


        $category = new Category;

        $category->name = $request->name;

        $category->image = 'uploads/category/'.$featured_new_name;

        $category->save();

        Session::flash('success','You successfully created a category');

        return redirect()->route('categories');

    }

    public function edit($id)
    {
        $category = Category::find($id);

        return view('admin.category.edit')->with('category', $category);
    }
    public function update(Request $request, $id)
    {
        $category = Category::find($id);

        $category->name = $request->name;

        $category->save();

        Session::flash('success','You successfully updated the category');

        return redirect()->route('categories');
    }

    public function destroy($id)
    {
        $category = Category::find($id);	

        $category->delete();

        Session::flash('success','You successfully deleted the category');

        return redirect()->route('categories');

    }


}
