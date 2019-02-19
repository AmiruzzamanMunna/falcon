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
        $ladies=DB::table('view_product')
        ->where('category_name','ladies clothing')->get();
    	return view('User.index')
        ->with('ladies',$ladies);
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
    public function partsAccessoriesIndex(Request $request)
    {
        $events=PartsAccessories::all();
        return view('User.parts&accessories')
        ->with('events',$events);
    }
    public function medicineEmergencyIndex(Request $request)
    {
        $events=MedicineEmergency::all();
        return view('User.medicineemergency')
        ->with('events',$events);
    }
}
