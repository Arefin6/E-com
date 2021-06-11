@extends('layouts.frontendMaster')
@section('content')

<div class="container-fluid mt-5">
        <h2 class="mb-5 text-center">Shopping Cart</h2>
        <div class="row justify-content-center">
           <div class="col-md-8">
              <div class="table-responsive">
                 <table id="myTable" class="table">
                    <thead>
                       <tr>
                          <th>Product</th>
                          <th>Name</th>
                          <th>Qty</th>
                          <th>Price</th>
                          <th class="text-right">
                             <span id="amount" class="amount">Amount</span>
                          </th>
                       </tr>
                    </thead>
                    <tbody>
                    @if(Session::has('cart'))
					 @foreach($products as $product)
                       <tr>
                          <td>
                             <div class="product-img">
                                <div class="img-prdct" >
                                   <img src="{{$product['product_image']}}" class="min-img">
                                </div>
                             </div>
                          </td>
                          <td>
                             <p>{{$product['product_name']}}</p>
                          </td>
                          <td>
                          <form action="{{route('cart.update')}}" method = "post">
								{{ csrf_field() }}
									<td class="quantity">
										<div class="input-group mb-3">
										<input type="number" name="quantity" class="quantity form-control input-number" value="{{$product['qty']}}" min="1" max="100">
										<input type="hidden" name="id" class="quantity form-control input-number" value="{{$product['product_id']}}" min="1" max="100">
										<input class="btn btn-success m-3" type="submit" value="update">
									</div>
								</form>
                          </td>
                          <td>
                             <input type="text" value="{{$product['product_price']}}" class="price form-control" disabled>
                          </td>
                          <td align="right">$ <span id="amount" class="amount">{{$product['product_price']*$product['qty']}}</span>
                            
                        </td>
                       </tr>
                       @endforeach 
                    </tbody>
                    @else
					  <h3 class="text-center text-danger ">No Products in Cart</h3>
						    
					@endif
                    <tfoot>
                       <tr>
                          <td colspan="4"></td>
                          <td align="right">
                             <strong>TOTAL = $  <span id="total" class="total">{{Session::has('cart') ? Session::get('cart')->totalPrice : 0}}</span>
                             </strong>
                          </td>
                       </tr>
                       <tr>
                          <td colspan="4"></td>
                          <td align="right">
                          <p><a href="{{route('checkout')}}"  class="btn btn-primary py-3 px-4">Proceed to Checkout</a></p>
                          </td>
                       </tr>
                    </tfoot>
                 </table>
              </div>
           </div>
        </div>
     </div>
@endsection 