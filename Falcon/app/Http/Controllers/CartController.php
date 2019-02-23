<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Product;
use App\User;

class CartController extends Controller
{
	public function cartIndex(Request $request)
    {
    	$user = $request->session()->get('loggedUser');
    	$carts=Cart::where('user_id',$user)->get();
    	$totals=0;
    	$quantity=0;
    	foreach($carts as $cart){
    		$totals+=$cart->unit_price*$cart->quantity;
    		$quantity+=$cart->quantity;
    	}
        return view('User.cart')
        ->with('quantity',$quantity)
        ->with('totals',$totals)
        ->with('carts',$carts)
        ->with('user',$user);
    }
    public function addCart(Request $request)
    {
    	$user=$request->session()->get('loggedUser');
    	if (!$user) {
    		$request->session()->flash('message','Sorry ! You Need to login');
    		return back();
    	}
    	$product=Product::find($request->product_id);
    	$cart= new Cart();
    	$cart->user_id= $user;
    	$cart->product_id=$request->product_id;
    	if ($request->product_size) {
    		$cart->size=$request->product_size;
    	}
    	
    	if ($request->quantity<=$product->quantity) {
    		$cart->quantity = $request->quantity;
    	}
    	else{
    		$request->session()->flash('message','Sorry ! Product is Out of Stock');
    		return back();
    	}
    	if($product->discount>0){
    		$result=0;
			$result=$product->price-($product->price*$product->discount/100);
			$cart->unit_price=$result;
    	}else{
    		$cart->unit_price=$product->price;
    	}
    	$cart->save();
    	return back();
    }
    public function cartEdit(Request $request,$id)
    {
    	$carts=Cart::where('id',$id)->get();
    	$carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
    	return view('User.updatecart')
    	->with('carts',$carts)
    	->with('quantity',$quantity);
    }
    public function cartUpdate(Request $request,$id)
    {
    	$carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $cart=Cart::find($request->id);
    	$product=Product::find($cart->product_id);
    	if ($request->quantity<=$product->quantity) {
    		$cart->quantity = $request->quantity;
    	}
    	else{
    		$request->session()->flash('message','Sorry ! Product is Out of Stock');
    		return back();
    	}
    	$cart->save();
    	return redirect()->route('cart.cartIndex');
    }
    public function cartRemove(Request $request,$id)
    {
    	$carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
    	$carts=Cart::find($request->id);
    	$carts->delete();
    	return back();
    }
}
