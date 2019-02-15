<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\EventWedding;
use App\EventBirthday;
use App\EventHospitality;
use App\EventOthers;
use App\EventIndex;
use App\Light;

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
}
