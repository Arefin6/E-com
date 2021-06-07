@extends('layouts.master')
@section('content')
<main>
                <h2 dash-titel>All Message</h2>

               
                                                                                                           
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Email</th>
                        <th scope="col">Messages</th>
            
                      </tr>
                    </thead>
                    <tbody>
                    @if($messages->count()>0)
                   
                   @foreach($messages as $message)
            
                      <tr>
                        <th scope="row">{{$message->id}}</th>
                        <td>{{$message->email}}</td>
                        
                            <td>
                                {{$message->text}}
                            </td>
            
                      </tr>
                 @endforeach
                
                @else
                    <tr>
                    		<th colspan="5" class="text-center">No Message Yet..</th>
                    </tr>
                 @endif   
                    </tbody>
                  </table>
              
        </main>                  
@endsection