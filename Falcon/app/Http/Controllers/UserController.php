<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\LoginRequest;
use App\User;
use App\EventWedding;
use App\EventBirthday;
use App\EventHospitality;
use App\EventOthers;
use App\EventIndex;
use App\Cart;
use App\Light;
use App\FamousTraditional;
use App\PartsAccessories;
use App\MedicineEmergency;

class UserController extends Controller
{
    public function signUP(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        return view('User.signup')
            ->with('quantity',$quantity);
    }
    public function signUPStore(SignupRequest $request)
    {
        $user = new User();
        $user->name=$request->name;
        $user->username=$request->username;
        $user->email=$request->email;
        $user->mobile=$request->mobile;
        $user->address=$request->address;
        $user->password=$request->password;
        $user->confirm_password=$request->confirm_password;
        $user->save();
        $request->session()->flash('message','Registered Successsfully');
        return back();
    }
    public function login(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        return view('User.login')
        ->with('quantity',$quantity)
        ->with('carts',$carts);
    }
    public function loginCheck(LoginRequest $request)
    {
        $users=User::where('username', $request->username)
                        ->where('password', $request->password)
                        ->first();
        if($users) {
            $request->session()->put('loggedUser', $users->id);
            $request->session()->flash('message','Login Successfull');
            return redirect()->route('user.index');
        }
        else{
            $request->session()->flash('message','Login Unseccessfull');
            return back();
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->guest(route('user.index'));
    }
    public function index(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $gents=DB::table('view_product')
        ->where('category_name','gents clothing')->get();
        $ladies=DB::table('view_product')
        ->where('category_name','ladies clothing')->get();
        $gadgets=DB::table('view_product')
        ->where('category_name','gadget')->get();
    	return view('User.index')
        ->with('quantity',$quantity)
        ->with('carts',$carts)
        ->with('gents',$gents)
        ->with('ladies',$ladies)
        ->with('gadgets',$gadgets);
    }
    public function ladiesIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        return view('User.ladies-index')
        ->with('quantity',$quantity);
    }
    public function ladiesClothing(Request $request,$name)
    {
         $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function ladiesJuwellay(Request $request,$name)
    {
         $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function ladiesCosmatic(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function ladiesShoes(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function gentsIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        return view('User.gents-index')
        ->with('quantity',$quantity);
    }
    public function gentsClothing(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function gentsCosmatic(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function gentsShoes(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function leatherIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        return view('User.leather-index')
        ->with('quantity',$quantity);
    }
    public function leatherBag(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function leatherBelt(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function leatherShoes(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function electricIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        return view('User.electrical&electronics-index')
        ->with('quantity',$quantity);
    }
    public function computerAccessories(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function electronics(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function securityServillance(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function gadgetPage(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function houseHoldIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        return view('User.household-index')
        ->with('quantity',$quantity);
    }
    public function cushions(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function throwsBlankets(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function mirrors(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function curtains(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function furnitureIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        return view('User.furniture-index')
        ->with('quantity',$quantity);
    }
    public function sofas(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function chairs(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function ottomans(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function tables(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function entertainmentCenter(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function bedRooms(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function toysShowIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        return view('User.toys&showpiece-index')
        ->with('quantity',$quantity);
    }
    public function toys(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function showPieces(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function giftIndex(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function flowersIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        return view('User.flowers-index')
        ->with('quantity',$quantity);
    }
    public function romance(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function anniversary(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function roses(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function birthday(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function thankyou(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function sympathy(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function booksIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        return view('User.booksmagazine-index')
        ->with('quantity',$quantity);
    }
    public function books(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function magazine(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
     public function foodIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        return view('User.food-index')
        ->with('quantity',$quantity);
    }
    public function groceries(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function breadBakery(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function fruitsVegitables(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function meatFish(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function freshMilk(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function eventIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
    	$events=EventIndex::all();
    	return view('User.eventmanagement-index')
        ->with('quantity',$quantity)
    	->with('events',$events);
    }
    public function weddingEventPage(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
    	$events=EventWedding::all();
    	return view('User.event-page')
        ->with('quantity',$quantity)
    	->with('events',$events);
    }
    public function birthdayEventPage(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
    	$events=EventBirthday::all();
    	return view('User.event-page')
        ->with('quantity',$quantity)
    	->with('events',$events);
    }
    public function HospitalityEventPage(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
    	$events=EventHospitality::all();
    	return view('User.event-page')
        ->with('quantity',$quantity)
    	->with('events',$events);
    }
    public function othersEventPage(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
    	$events=EventOthers::all();
    	return view('User.event-page')
        ->with('quantity',$quantity)
    	->with('events',$events);
    }
    public function lightIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
    	$events=Light::all();
    	return view('User.event-page')
        ->with('quantity',$quantity)
    	->with('events',$events);
    }
    public function famousTradionalIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $events=FamousTraditional::all();
        return view('User.famous&traditional')
        ->with('quantity',$quantity)
        ->with('events',$events);
    }
    public function nakshikatha(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function potteryTerracotta(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function shitalPati(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function partsAccessoriesIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $events=PartsAccessories::all();
        return view('User.parts&accessories')
        ->with('quantity',$quantity)
        ->with('events',$events);
    }
    public function bikes(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function cars(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function medicineEmergencyIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $events=MedicineEmergency::all();
        return view('User.medicineemergency')
        ->with('quantity',$quantity)
        ->with('events',$events);
    }
    public function medicine(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function fastAidKit(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('products',$products);
    }
    public function searchItem(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $search=$request->search;
        $products=DB::table('view_product')
                        ->where('product_name','like','%'.$search.'%')
                        ->get();
        return view('User.allproduct')
            ->with('quantity',$quantity)
            ->with('products',$products)
            ->with('search',$search);
    }
    public function productDetails(Request $request,$id)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $products=DB::table('view_product')
        ->where('id',$id)->first();
        $sizes = json_decode($products->size);
        return view('User.product-details')
        ->with('quantity',$quantity)
        ->with('products',$products)
        ->with('sizes',$sizes);
    }
}
