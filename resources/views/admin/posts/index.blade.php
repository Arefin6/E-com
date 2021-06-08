@extends('layouts.master')
@section('content')
<main>
                <h2 dash-titel>All Posts</h2>

                <a class="btn btn-outline-dark" href="{{ route('post.create') }}">Add Post </a>
                                                                                                           
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Post Title</th>
                        <th scope="col">Post Image</th>
                        <th scope="col">Post Content</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if($posts->count()>0)
                   
                   @foreach($posts as $post)
            
                      <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                          <td>
                          <img src="{{ asset('/'. $post->featured) }}"   width="70px"height="50px" style="border-radius: 50%;"/>
                            </td>
                            <td>
                            {{ str_limit($post->content, 30) }}
                            </td>
                        <td><a href="{{ route('post.edit',['id'=>$post->id]) }}" class="btn btn-outline-success">Update</a>
                        <a href="{{ route('post.delete',['id'=>$post->id]) }}" class="btn btn-outline-danger">Delete</a></td>
                      </tr>
                 @endforeach
                
                @else
                    <tr>
                    		<th colspan="5" class="text-center">No posts Yet..</th>
                    </tr>
                 @endif   
                    </tbody>
                  </table>
              
        </main>                  
@endsection