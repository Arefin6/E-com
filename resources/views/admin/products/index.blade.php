@extends('layouts.master')
@section('content')
<main>
                <h2 dash-titel>All Products</h2>

                <a class="btn btn-outline-dark" href="{{ route('product.create') }}">Add Product </a>
                                                                                                           
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Product Image</th>
                        <th scope="col">Product Price</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if($products->count()>0)
                   
                   @foreach($products as $product)
            
                      <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->name}}</td>
                          <td>
                          <img src="{{ asset('/'. $product->image) }}"   width="70px"height="50px" style="border-radius: 50%;"/>
                            </td>
                            <td>
                                {{$product->price}}
                            </td>
                        <td><a href="{{ route('product.edit',['id'=>$product->id]) }}" class="btn btn-outline-success">Update</a>
                        <a href="{{ route('product.delete',['id'=>$product->id]) }}" class="btn btn-outline-danger">Delete</a></td>
                      </tr>
                 @endforeach
                
                @else
                    <tr>
                    		<th colspan="5" class="text-center">No Products Yet..</th>
                    </tr>
                 @endif   
                    </tbody>
                  </table>
              
        </main>                  
@endsection