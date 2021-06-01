@extends('layouts.master')
@section('content')
<main>
@include('admin.error')
     <h2>Add new Category here.</h2>       
     <form action="{{ route('category.store') }}" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <label>
                        Category Name: 
                    </label>
                   
                    <input type="text" placeholder="Category Name"  name="name">
                    </div>
                    <div class="Submit-btn" >
                        <input type="submit"  Value="Save" id="send" name="send">
                        <input type="reset"  Value="Clear" id="clear" name="clear">
                      </div>    
              <form>

  </main>                  
@endsection