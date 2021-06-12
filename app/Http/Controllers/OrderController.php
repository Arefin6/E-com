<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Product;

use Stripe\Charge;

use Stripe\Stripe;

use App\Cart;

use Session;

use App\Order;

class OrderController extends Controller
{
    public function storeCheckout(Request $request){
         
        if(!Session::has('cart')){
    
          return redirect()->back();
       }
       $oldCart = Session::has('cart')? Session::get('cart'):null;
       $cart = new Cart($oldCart);
    
       Stripe::setApiKey('sk_test_0XPcXtoFvqmsFVgc7Nmnryqu00fTNINhnO');
    
            try{
    
                $charge = Charge::create(array(
                    "amount" => $cart->totalPrice * 100,
                    "currency" => "usd",
                    "source" => $request->input('stripeToken'), // obtainded with Stripe.js
                    "description" => "Test Charge"
                ));
    
                $order = new Order;
    
                $order->name = $request->name;
    
                $order->address = $request->address;
    
                $order->cart = serialize($cart);
    
                $order->payment_id = $charge->id;
        
                $order->save();
    
            } catch(\Exception $e){
                Session::put('error', $e->getMessage());
                return redirect()->back();
            }
    
            Session::forget('cart');
            Session::flash('success', 'Payment Completed successfully.');
            return redirect()->route('carts');
      }
}
