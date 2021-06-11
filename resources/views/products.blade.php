@extends('layouts.frontendMaster')
@section('content')
<div class="container">
              <div class="row">
              @if($products->count()>0)
                   
                @foreach($products as $product)
                <div class="col">
                    <div class="h" style="width: 280px;">  
                        <div class="product-grid">
                      <div class="product-image">
                          <a href="#" class="image">
                              <img class="pic-1" src="{{ asset('/'. $product->image) }}">
                              <img class="pic-2" src="{{ asset('/'. $product->image) }}">
                              
                          </a>
                          <span class="product-discount-label">-40%</span>
                          <ul class="product-links">
                              <li><a href="#" data-tip="Add to Wishlist"><i class="fas fa-heart"></i></a></li>
                              <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                              <li><a href="#" data-tip="Quick View"><i class="fa fa-search"></i></a></li>
                              <li><a href="{{route('cart.add',['id'=>$product->id])}}" data-tip="Add to Cart"><i class="fa fa-shopping-bag"></i></a></li>
                          </ul>
                      </div>
                      <div class="product-content">
                          <ul class="rating">
                              <li class="fas fa-star"></li>
                              <li class="fas fa-star"></li>
                              <li class="fas fa-star"></li>
                              <li class="fas fa-star"></li>
                              <li class="fas fa-star"></li>
                          </ul>
                          <h3 class="title"><a href="#">{{$product->name}}</a></h3>
                          <div class="price"><span>${{$product->price}}</span></div>
                      </div>
                  </div></div>
                 </div>
                 @endforeach
                
                @else
                    <tr>
                    		<th colspan="5" class="text-center">No Products Yet..</th>
                    </tr>
                 @endif   
             </div>
             </div>    
@endsection    