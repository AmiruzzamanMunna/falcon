<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\EventWedding;
use App\EventBirthday;
use App\EventHospitality;
use App\EventOthers;
use App\EventIndex;
use App\Light;
use App\FamousTraditional;
use App\PartsAccessories;
use App\MedicineEmergency;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $gents=DB::table('view_product')
        ->where('category_name','gents clothing')->get();
        $ladies=DB::table('view_product')
        ->where('category_name','ladies clothing')->get();
        $gadgets=DB::table('view_product')
        ->where('category_name','gadget')->get();
    	return view('User.index')
        ->with('gents',$gents)
        ->with('ladies',$ladies)
        ->with('gadgets',$gadgets);
    }
    public function ladiesIndex(Request $Request)
    {
        return view('User.ladies-index');
    }
    public function ladiesClothing(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function ladiesJuwellay(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function ladiesCosmatic(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function ladiesShoes(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function gentsIndex(Request $request)
    {
        return view('User.gents-index');
    }
    public function gentsClothing(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function gentsCosmatic(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function gentsShoes(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function leatherIndex(Request $request)
    {
        return view('User.leather-index');
    }
    public function leatherBag(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function leatherBelt(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function leatherShoes(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function electricIndex(Request $request)
    {
        return view('User.electrical&electronics-index');
    }
    public function computerAccessories(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function electronics(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function securityServillance(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function gadgetPage(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function houseHoldIndex(Request $request)
    {
        return view('User.household-index');
    }
    public function cushions(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function throwsBlankets(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function mirrors(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function curtains(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function furnitureIndex(Request $request)
    {
        return view('User.furniture-index');
    }
    public function sofas(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function chairs(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function ottomans(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
     public function tables(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function entertainmentCenter(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function bedRooms(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function toysShowIndex(Request $request)
    {
        return view('User.toys&showpiece-index');
    }
    public function toys(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function showPieces(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function giftIndex(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function flowersIndex(Request $request)
    {
        return view('User.flowers-index');
    }
    public function romance(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function anniversary(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function roses(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function birthday(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function thankyou(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function sympathy(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function booksIndex(Request $request)
    {
        return view('User.booksmagazine-index');
    }
    public function books(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function magazine(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
     public function foodIndex(Request $request)
    {
        return view('User.food-index');
    }
    public function groceries(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function breadBakery(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function fruitsVegitables(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function meatFish(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function freshMilk(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function eventIndex($value='')
    {
    	$events=EventIndex::all();
    	return view('User.eventmanagement-index')
    	->with('events',$events);
    }
    public function weddingEventPage(Request $request)
    {
    	$events=EventWedding::all();
    	return view('User.event-page')
    	->with('events',$events);
    }
    public function birthdayEventPage(Request $request)
    {
    	$events=EventBirthday::all();
    	return view('User.event-page')
    	->with('events',$events);
    }
    public function HospitalityEventPage(Request $request)
    {
    	$events=EventHospitality::all();
    	return view('User.event-page')
    	->with('events',$events);
    }
    public function othersEventPage(Request $request)
    {
    	$events=EventOthers::all();
    	return view('User.event-page')
    	->with('events',$events);
    }
    public function lightIndex(Request $request)
    {
    	$events=Light::all();
    	return view('User.event-page')
    	->with('events',$events);
    }
    public function famousTradionalIndex(Request $request)
    {
        $events=FamousTraditional::all();
        return view('User.famous&traditional')
        ->with('events',$events);
    }
    public function nakshikatha(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function potteryTerracotta(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function shitalPati(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function partsAccessoriesIndex(Request $request)
    {
        $events=PartsAccessories::all();
        return view('User.parts&accessories')
        ->with('events',$events);
    }
    public function bikes(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function cars(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function medicineEmergencyIndex(Request $request)
    {
        $events=MedicineEmergency::all();
        return view('User.medicineemergency')
        ->with('events',$events);
    }
    public function medicine(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
    public function fastAidKit(Request $request,$name)
    {
        $products=DB::table('view_product')
        ->where('category_name',$name)->get();
        return view('User.allproduct')
        ->with('products',$products);
    }
}
