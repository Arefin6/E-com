@extends('layouts.master')
@section('content')
<main>
@include('admin.error')
            <h2 dash-titel>Add new post here.</h2>
            <br>
            <form action="{{ route('post.store') }}"  enctype="multipart/form-data" method="post" >
            {{ csrf_field() }}    
            <div class="row">
                    <label>
                        Product title: 
                    </label>
                   
                    <input type="text" placeholder="product Title"  name="title">
                    </div>
                        
                    <br>
                    <div class="row">
                        <label>images</label>
                        <input type="file" id="images" name="featured"  />
                     </div>
                     <br>
                     
                     <br>
                   <div class="row">

                    <label>Content</label>
                    <textarea type="text" placeholder="Content" id="description" name="content" cols="30" rows="10"></textarea>
                    

                   </div>
                   
                  
                    <div class="Submit-btn" >
                        <input type="submit"  Value="Save" id="send" name="send">
                        <input type="reset"  Value="Clear" id="clear" name="clear">
                      </div>
            </form>
      

           
        </main>        
@endsection