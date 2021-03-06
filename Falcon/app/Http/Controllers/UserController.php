<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\QuantityRequest;
use App\User;
use App\EventWedding;
use App\EventBirthday;
use App\EventHospitality;
use App\EventOthers;
use App\EventIndex;
use App\Cart;
use App\Light;
use App\FoodIndex;
use App\BooksIndex;
use App\FamousTraditional;
use App\PartsAccessories;
use App\MedicineEmergency;
use App\FlowerIndex;
use App\ToysIndex;
use App\FurnitureIndex;
use App\HouseholdIndex;
use App\ElectricIndex;
use App\LeatherIndex;
use App\GentsIndex;
use App\LadiesIndex;
use App\AboutUS;
use App\Policy;
use App\ContactUs;
use App\Index;


class UserController extends Controller
{
    public function signUP(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        return view('User.signup')
            ->with('footers',$footers)
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
        $user->password=Hash::make($request->password);
        $user->confirm_password=Hash::make($request->confirm_password);
        $user->save();
        $request->session()->flash('message','Registered Successsfully');
        return redirect()->route('user.login');
    }
    public function login(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        return view('User.login')
        ->with('footers',$footers)
        ->with('quantity',$quantity)
        ->with('carts',$carts);
    }
    public function loginCheck(LoginRequest $request)
    {
        $users=User::where('username', $request->username)
                    ->first();

        if($users && Hash::check($request->password,$users->password)) {

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
    public function newarrival(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table("view_product")->where('newarrival',1)->get();
        return view('User.allproduct')
            ->with('products',$products)
            ->with('footers',$footers)
            ->with('quantity',$quantity);
    }
    public function discount(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table("view_product")->where('discount','>','0')->get();
        return view('User.allproduct')
            ->with('products',$products)
            ->with('footers',$footers)
            ->with('quantity',$quantity);
    }
    public function index(Request $request)
    {
        $events=Index::all();
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $contains=LadiesIndex::all();
        $containsgents=GentsIndex::all();
        $footers=ContactUs::all();
        $gents=DB::table('view_product')
        ->where('category_name','gents clothing')->get();
        $ladies=DB::table('view_product')
        ->where('category_name','ladies clothing')->get();
        $gadgets=DB::table('view_product')
        ->where('category_name','gadget')->get();
    	return view('User.index')
        ->with('quantity',$quantity)
        ->with('carts',$carts)
        ->with('contains',$contains)
        ->with('containsgents',$containsgents)
        ->with('gents',$gents)
        ->with('events',$events)
        ->with('ladies',$ladies)
        ->with('footers',$footers)
        ->with('gadgets',$gadgets);
    }
    public function ladiesIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $events=LadiesIndex::all();
        return view('User.ladies-index')
        ->with('events',$events)
        ->with('footers',$footers)
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
        $footers=ContactUs::all();
        return view('User.allproduct')
        ->with('footers',$footers)
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
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function ladiesCosmatic(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function ladiesShoes(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function gentsIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $events=GentsIndex::all();
        return view('User.gents-index')
        ->with('events',$events)
        ->with('footers',$footers)
        ->with('quantity',$quantity);
    }
    public function gentsClothing(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function gentsCosmatic(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function gentsShoes(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function leatherIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $events=LeatherIndex::all();
        return view('User.leather-index')
        ->with('events',$events)
        ->with('footers',$footers)
        ->with('quantity',$quantity);
    }
    public function leatherBag(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function leatherBelt(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function leatherShoes(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function electricIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $events=ElectricIndex::all();
        return view('User.electrical&electronics-index')
        ->with('events',$events)
        ->with('footers',$footers)
        ->with('quantity',$quantity);
    }
    public function computerAccessories(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function electronics(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function securityServillance(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function gadgetPage(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function houseHoldIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $events=HouseholdIndex::all();
        return view('User.household-index')
        ->with('events',$events)
        ->with('footers',$footers)
        ->with('quantity',$quantity);
    }
    public function cushions(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function throwsBlankets(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function mirrors(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function curtains(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('footers',$footers)
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
        $footers=ContactUs::all();
        $events=FurnitureIndex::all();
        return view('User.furniture-index')
        ->with('events',$events)
        ->with('footers',$footers)
        ->with('quantity',$quantity);
    }
    public function sofas(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function chairs(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function ottomans(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function tables(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function entertainmentCenter(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function bedRooms(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function toysShowIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $events=ToysIndex::all();
        return view('User.toys&showpiece-index')
        ->with('events',$events)
        ->with('footers',$footers)
        ->with('quantity',$quantity);
    }
    public function toys(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function showPieces(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function giftIndex(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function flowersIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $events=FlowerIndex::all();
        return view('User.flowers-index')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('events',$events);
    }
    public function romance(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function anniversary(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function roses(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function birthday(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function thankyou(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function sympathy(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function booksIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $events=BooksIndex::all();
        return view('User.booksmagazine-index')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('events',$events);
    }
    public function books(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function magazine(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function foodIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $events=FoodIndex::all();
        return view('User.food-index')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('events',$events);
    }
    public function groceries(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function breadBakery(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function fruitsVegitables(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function meatFish(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function freshMilk(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function eventIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
    	$events=EventIndex::all();
    	return view('User.eventmanagement-index')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
    	->with('events',$events);
    }
    public function weddingEventPage(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
    	$events=EventWedding::all();
    	return view('User.event-page')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
    	->with('events',$events);
    }
    public function birthdayEventPage(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
    	$events=EventBirthday::all();
    	return view('User.event-page')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
    	->with('events',$events);
    }
    public function HospitalityEventPage(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
    	$events=EventHospitality::all();
    	return view('User.event-page')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
    	->with('events',$events);
    }
    public function othersEventPage(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
    	$events=EventOthers::all();
    	return view('User.event-page')
        ->with('footers',$footers)
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
        $footers=ContactUs::all();
    	$events=Light::all();
    	return view('User.event-page')
        ->with('footers',$footers)
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
        $footers=ContactUs::all();
        $events=FamousTraditional::all();
        return view('User.famous&traditional')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('events',$events);
    }
    public function nakshikatha(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function potteryTerracotta(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function shitalPati(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('footers',$footers)
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
        $footers=ContactUs::all();
        $events=PartsAccessories::all();
        return view('User.parts&accessories')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('events',$events);
    }
    public function bikes(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function cars(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function medicineEmergencyIndex(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $events=MedicineEmergency::all();
        return view('User.medicineemergency')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('events',$events);
    }
    public function medicine(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function fastAidKit(Request $request,$name)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('quantity',$quantity)
        ->with('footers',$footers)
        ->with('products',$products);
    }
    public function searchItem(Request $request)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $search=$request->search;
        $products=DB::table('view_product')
                        ->where('product_name','like','%'.$search.'%')
                        ->get();
        return view('User.allproduct')
            ->with('quantity',$quantity)
            ->with('footers',$footers)
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
        $footers=ContactUs::all();
        $products=DB::table('view_product')
        ->where('id',$id)->first();
        $sizes = json_decode($products->size);
        return view('User.product-details')
        ->with('quantity',$quantity)
        ->with('products',$products)
        ->with('footers',$footers)
        ->with('sizes',$sizes);
    }
    public function invoiceIndex(Request $request,$id)
    {
        $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $totalprice=0;
        $footers=ContactUs::all();
        $users=DB::table('view_order')
        ->where('user_id',$request->session()->get('loggedUser'))
        ->where('invoice_id',$id)->get();
        foreach ($users as $cart) {
                $totalprice=$cart->cart_totalprice;
            }
        return view('User.invoice')
            ->with('users',$users)
            ->with('footers',$footers)
            ->with('totalprice',$totalprice)
            ->with('id',$id)
            ->with('quantity',$quantity);
    }
    public function userAccount(Request $request)
    {
        $users = User::where('id',$request->session()->get('loggedUser'))->get();
         $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $orders=DB::table('view_order')
                    ->where('user_id',$request->session()->get('loggedUser'))->get();
        return view('User.account')
            ->with('quantity',$quantity)
            ->with('footers',$footers)
            ->with('users',$users)
            ->with('orders',$orders);
    }
    public function customerOrder(Request $request,$id)
    {
        $users = User::where('id',$request->session()->get('loggedUser'))->get();
         $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $orders = DB::table('view_order')
                    ->where('user_id',$id)->get();
        return view('User.orderdetails')
                ->with('users',$users)
                ->with('quantity',$quantity)
                ->with('footers',$footers)
                ->with('orders',$orders);
    }
    public function aboutUs(Request $request)
    {
       $users = User::where('id',$request->session()->get('loggedUser'))->get();
         $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $footersitem=AboutUS::all();
        return view('User.footer')
            ->with('quantity',$quantity) 
            ->with('footersitem',$footersitem) 
            ->with('footers',$footers); 
    }
    public function policy(Request $request)
    {
       $users = User::where('id',$request->session()->get('loggedUser'))->get();
         $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        $footersitem=Policy::all();
        return view('User.footer')
            ->with('quantity',$quantity) 
            ->with('footersitem',$footersitem)
            ->with('footers',$footers); 
    }
    public function contactus(Request $request)
    {
       $users = User::where('id',$request->session()->get('loggedUser'))->get();
         $carts =Cart::where('user_id',$request->session()->get('loggedUser'))->get();
        $quantity=0;
        foreach($carts as $cart){

            $quantity+=$cart->quantity;
        }
        $footers=ContactUs::all();
        return view('User.contact')
            ->with('quantity',$quantity) 
            ->with('footers',$footers); 
    }
}
