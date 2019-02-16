<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    	return view('User.index');
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
