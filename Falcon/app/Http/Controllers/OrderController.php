<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Cart;
use App\Order;
use App\Invoice;
use App\Product;

class OrderController extends Controller
{
    public function checkOut(Request $request)
    {
    	$carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
    	return view('User.order')
    			->with('quantity',$quantity);
    }
    public function checkOutStore(OrderRequest $request)
    {
    	$userid=$request->session()->get('loggedUser');
    	$carts=Cart::where('user_id',$userid)->get();
    	$carttotal=0;
    	foreach ($carts as $cart) {
    		
    		$carttotal+=$cart->total_price;
    	}
    	$invoice= new Invoice();
    	$invoice->user_id=$userid;
    	$invoice->Order_date=date('Y-m-d');
    	$invoice->status=1;
    	if($invoice->save()>0)
    	{
    		foreach($carts as $cart){
    			$order= new Order();
    			$order->name=$request->name;
    			$order->mobile1=$request->mobile1;
    			if ($request->mobile2) {
                    $order->mobile2=$request->mobile2;
                }
    			$order->address=$request->address;
    			$order->email=$request->email;
    			$order->invoice_id=$invoice->id;
    			$order->cart_id=$cart->id;
    			$order->user_id=$userid;
    			$product=Product::find($cart->product_id);
    			$order->cart_product_id=$cart->product_id;
    			$order->cart_size=$cart->size;
    			$order->cart_quantity=$cart->quantity;
    			$product->quantity=$product->quantity-$cart->quantity;
    			$product->save();
    			$order->cart_totalprice=$carttotal;
    			$order->orderdate=date('Y-m-d');
    			if ($order->save()>0) {
    				$cart=Cart::where('user_id',$request->session()->get('loggedUser'))
    							->delete();
    			}
    		}
    	}
    	return redirect()->route('user.invoice',[$invoice->id]);
    }
}
