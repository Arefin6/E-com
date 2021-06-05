@extends('layouts.master')
@section('content')
<main>
@include('admin.error')
            <h2 dash-titel>Add new product here.</h2>
            <br>
            <form action="{{ route('product.update',['id'=>$product->id]) }}"  enctype="multipart/form-data" method="post" >
            {{ csrf_field() }}    
            <div class="row">
                    <label>
                        Product Name: 
                    </label>
                   
                    <input type="text" value="{{$product->name}}" placeholder="product Name"  name="name">
                    </div>
                    <div class="row">
                        <label>
                            Category: 
                        </label>
                       
                        <select name="category_id" id="category" >
                        @foreach($categories as $category)
                            <option value="{{ $category->id}}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                        </div>
                        
                    <br>
                    <div class="row">
                        <label>images</label>
                        <input type="file" id="images" name="image"  />
                     </div>
                     <br>
                     
                     <br>
                   <div class="row">

                    <label>Description</label>
                    <textarea type="text"  placeholder="Description" id="description" name="description" cols="30" rows="10">
                        {{$product->description}}
                    </textarea>
                    

                   </div>
                   <br>
                   <div class="row">
                    <label>short Description</label>
                    <textarea type="text"  placeholder="short Description" id="shortDescription" name="shortDescription" cols="30" rows="10">
                    {{$product->short_description}}
                    </textarea>
                    

                   </div>
                    <br>
                 <div class="row">
                    <label>Price</label>
                    <input type="number" value="{{$product->price}}" placeholder="Price" id="Price" name="price">
                 </div>
                    <br>
                    <div class="row">
                        <label>Wight</label><br>
                        <input type="number" value="{{$product->weight}}" placeholder="wight" id="wight" name="weight">

                    </div>
                    <br>
                   
                  
                    <div class="Submit-btn" >
                        <input type="submit"  Value="Save" id="send" name="send">
                        <input type="reset"  Value="Clear" id="clear" name="clear">
                      </div>
            </form>
      

           
        </main>        
@endsection