@extends('layouts.frontendMaster')
@section('content')
<section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
				<form action=""  id="checkout-form" method="POST" class="billing-form">
						{{csrf_field()}}	
						<h3 class="mb-4 billing-heading">Billing Details</h3>
						@if(Session::has('error'))
						    <div class="alert alert-danger">{{Session::get('error')}} {{Session::put('error',null)}}</div>
						@endif
	          	<div class="row align-items-end">
	          		<div class="col-md-12">
	                <div class="form-group">
	                	<label for="name">Full Name</label>
	                  <input type="text" name="name" class="form-control" placeholder="name">
	                </div>
	              </div>
	              
                <div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="address">Address</label>
							<input type="text" name="address" class="form-control" placeholder="Address">
		                 
		            	</div>
		            </div>
		            
		            
					<div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="card-name">Name On Card</label>
							<input id="card-name" type="text" name="NameOnCard" class="form-control" placeholder="Name On Card">
		                 
		            	</div>
					</div>
					
					<div class="w-100"></div>
		            <div class="col-md-12">
		            	<div class="form-group">
		            		<label for="card-number">Card Number</label>
							<input id="card-number" type="text" name="card-number" class="form-control" placeholder="card-number">
		                 
		            	</div>
		            </div>
		            
		            <div class="w-100"></div>
		            <div class="col-md-6">
	                <div class="form-group">
	                	<label for="card-expiry-month">Exp Month</label>
	                  <input  id ="card-expiry-month" type="text" name="expMonth" class="form-control" placeholder="exp-month">
	                </div>
	              </div>
	              <div class="col-md-6">
	                <div class="form-group">
	                	<label for="card-expiry-year">Exp Year</label>
	                  <input  id ="card-expiry-year" type="text" name="exp-Year" class="form-control" placeholder="exp-Year">
	                </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                	<div class="form-group">
					<label for="card-cvc">CVC</label>
	                  <input  id="card-cvc" type="text" name="CVC" class="form-control" placeholder="CVC">				
					</div>
				</div>
				<button type="submit" class="btn btn-primary">Place Order</button>
	        </div>
	          </form><!-- END -->
					</div>
			<div class="col-xl-5">
	          <div class="row mt-5 pt-3">
	          	<div class="col-md-12 d-flex mb-5">
	          		<div class="cart-detail cart-total p-3 p-md-4">
	          			<h3 class="billing-heading mb-4">Cart Total</h3>
	          			       <p class="d-flex text-primary">
		    						<span >Subtotal</span>
		    						<span>$20.60</span>
		    					</p>
		    					<p class="d-flex text-primary">
		    						<span >Delivery</span>
		    						<span>$0.00</span>
		    					</p>
		    					<p class="d-flex text-primary">
		    						<span>Discount</span>
		    						<span>$3.00</span>
		    					</p>
		    					<hr>
		    					<p class="total-price ">
		    						<span class="text-primary">Total</span>
		    						<span>${{Session::get('cart')->totalPrice}}</span>
		    					</p>
							
	          	</div>
	          	
	          </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> 

    
<script src="https://js.stripe.com/v2/"></script>

<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>

<script src="src/js/checkout.js"></script>

<script src="{{asset('frontend')}}/js/jquery.min.js"></script>
<script src="{{asset('frontend')}}/js/jquery-migrate-3.0.1.min.js"></script>
<script src="{{asset('frontend')}}/js/popper.min.js"></script>
<script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
<script src="{{asset('frontend')}}/js/jquery.easing.1.3.js"></script>
<script src="{{asset('frontend')}}/js/jquery.waypoints.min.js"></script>
<script src="{{asset('frontend')}}/js/jquery.stellar.min.js"></script>
<script src="{{asset('frontend')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('frontend')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('frontend')}}/js/aos.js"></script>
<script src="{{asset('frontend')}}/js/jquery.animateNumber.min.js"></script>
<script src="{{asset('frontend')}}/js/bootstrap-datepicker.js"></script>
<script src="{{asset('frontend')}}/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{asset('frontend')}}/js/google-map.js"></script>
<script src="{{asset('frontend')}}/js/main.js"></script>

<script>
	  $(document).ready(function(){

	  var quantitiy=0;
		 $('.quantity-right-plus').click(function(e){
			  
			  // Stop acting like a button
			  e.preventDefault();
			  // Get the field name
			  var quantity = parseInt($('#quantity').val());
			  
			  // If is not undefined
				  
				  $('#quantity').val(quantity + 1);

				
				  // Increment
			  
		  });

		   $('.quantity-left-minus').click(function(e){
			  // Stop acting like a button
			  e.preventDefault();
			  // Get the field name
			  var quantity = parseInt($('#quantity').val());
			  
			  // If is not undefined
			
				  // Increment
				  if(quantity>0){
				  $('#quantity').val(quantity - 1);
				  }
		  });
		  
	  });
  </script>
@endsection 