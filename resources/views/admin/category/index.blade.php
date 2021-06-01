@extends('layouts.master')
@section('content')
<main>
                <h2 dash-titel>All Categories</h2>

                <a class="btn btn-outline-dark" href="{{ route('category.create') }}">Add Category </a>
                                                                                                           
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if($categories->count()>0)
                   
                   @foreach($categories as $category)
            
                      <tr>
                        <th scope="row">{{$category->id}}</th>
                        <td>{{$category->name}}</td>
                        <td><a href="{{ route('category.edit',['id'=>$category->id]) }}" class="btn btn-outline-success">Update</a>
                        <a href="{{ route('category.delete',['id'=>$category->id]) }}" class="btn btn-outline-danger">Delete</a></td>
                      </tr>
                 @endforeach
                
                @else
                    <tr>
                    		<th colspan="5" class="text-center">No Categories Yet..</th>
                    </tr>
                 @endif   
                    </tbody>
                  </table>
              
        </main>                  
@endsection