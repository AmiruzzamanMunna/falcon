<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EventWeddingRequest;
use App\Http\Requests\EventIndexRequest;
use App\EventWedding;
use App\EventBirthday;
use App\EventHospitality;
use App\EventOthers;
use App\EventIndex;
use App\Light;

class AdminController extends Controller
{
    public function index($value='')
    {
    	return view('Admin.index');
    }
    public function eventIndex(Request $request)
    {
        $events=EventIndex::all();
        return view('Admin.event-index')
        ->with('events',$events);
    }
    public function eventIndexEdit(Request $request,$id)
    {
    	$events=EventIndex::where('id',$id)->get();
        return view('Admin.event-index')
        ->with('events',$events);
    }
    public function eventIndexUpdate(EventIndexRequest $request,$id)
    {
        $event=EventIndex::find($request->id);
        $event->heading1=$request->heading1;
        $event->paragraph=$request->paragraph;
        $event->heading2=$request->heading2;
        if ($request->hasFile('image1')) {
          $image1 = $request->file('image1');
          $filename1 = time() . 'eventindex-1.' . $image1->getClientOriginalExtension();
          $location1 = public_path('images/uploads');
          $image1->move($location1, $filename1);
          // Image::make($image)->resize(800, 400)->save($location);
          $event->image1 = $filename1;
        }
        $event->heading3=$request->heading3;
        if ($request->hasFile('image2')) {
          $image2 = $request->file('image2');
          $filename2 = time() . 'eventindex-2.' . $image2->getClientOriginalExtension();
          $location2 = public_path('images/uploads');
          $image2->move($location2, $filename2);
          // Image::make($image)->resize(800, 400)->save($location);
          $event->image2 = $filename2;
        }
        $event->heading4=$request->heading4;
        if ($request->hasFile('image3')) {
          $image3 = $request->file('image3');
          $filename3 = time() . 'eventindex-3.' . $image3->getClientOriginalExtension();
          $location3 = public_path('images/uploads');
          $image3->move($location3, $filename3);
          // Image::make($image)->resize(800, 400)->save($location);
          $event->image3 = $filename3;
        }
        $event->heading5=$request->heading5;
        if ($request->hasFile('image4')) {
          $image4 = $request->file('image4');
          $filename4 = time() . 'eventindex-4.' . $image4->getClientOriginalExtension();
          $location4 = public_path('images/uploads');
          $image4->move($location4, $filename4);
          // Image::make($image)->resize(800, 400)->save($location);
          $event->image4 = $filename4;
        }
        $event->save();

        $request->session()->flash('message','Data Updated');
        return back();
    }
    public function eventWedding($value='')
    {
    	$events=EventWedding::all();
    	return view('Admin.event')
    	->with('events',$events);
    }
    public function weddingEdit(Request $request,$id)
    {
    	$events=EventWedding::where('id',$id)->get();
    	return view('Admin.event')
    	->with('events',$events);
    }
    public function weddingUpdate(EventWeddingRequest $request,$id)
    {
    	$event=EventWedding::find($request->id);
    	if ($request->hasFile('image1')) {
	      $image1 = $request->file('image1');
	      $filename1 = time() . 'wedding-1.' . $image1->getClientOriginalExtension();
	      $location1 = public_path('images/uploads');
	      $image1->move($location1, $filename1);
	      // Image::make($image)->resize(800, 400)->save($location);
	      $event->image1 = $filename1;
    	}
    	if ($request->hasFile('image2')) {
	      $image2 = $request->file('image2');
	      $filename2 = time() . 'wedding-2.' . $image2->getClientOriginalExtension();
	      $location2 = public_path('images/uploads');
	      $image2->move($location2, $filename2);
	      // Image::make($image)->resize(800, 400)->save($location);
	      $event->image2 = $filename2;
    	}
    	if ($request->hasFile('image3')) {
	      $image3 = $request->file('image3');
	      $filename3 = time() . 'wedding-3.' . $image3->getClientOriginalExtension();
	      $location3 = public_path('images/uploads');
	      $image3->move($location3, $filename3);
	      // Image::make($image)->resize(800, 400)->save($location);
	      $event->image3 = $filename3;
    	}
    	$event->heading1=$request->heading1;
    	$event->paragraph1=$request->paragraph1;
    	$event->heading2=$request->heading2;
    	$event->paragraph2=$request->paragraph2;
    	$event->heading3=$request->heading3;
    	$event->paragraph3=$request->paragraph3;
    	$event->heading4=$request->heading4;
    	$event->paragraph4=$request->paragraph4;
    	$event->heading5=$request->heading5;
    	$event->paragraph5=$request->paragraph5;
    	$event->save();

    	$request->session()->flash('message','Data Updated');
    	return back();
    }
    public function eventBirthday(Request $request)
    {
    	$events=EventBirthday::all();
    	return view('Admin.eventbirthday')
    	->with('events',$events);
    }
    public function eventBirthdayEdit(Request $request,$id)
    {
    	$events =EventBirthday::where('id',$id)->get();
    	return view('Admin.eventbirthday')
    	->with('events',$events);
    }
    public function eventBirthdayUpdate(EventWeddingRequest $request,$id)
    {
    	$event=EventBirthday::find($request->id);
    	if ($request->hasFile('image1')) {
	      $image1 = $request->file('image1');
	      $filename1 = time() . 'birthday-1.' . $image1->getClientOriginalExtension();
	      $location1 = public_path('images/uploads');
	      $image1->move($location1, $filename1);
	      // Image::make($image)->resize(800, 400)->save($location);
	      $event->image1 = $filename1;
    	}
    	if ($request->hasFile('image2')) {
	      $image2 = $request->file('image2');
	      $filename2 = time() . 'birthday-2.' . $image2->getClientOriginalExtension();
	      $location2 = public_path('images/uploads');
	      $image2->move($location2, $filename2);
	      // Image::make($image)->resize(800, 400)->save($location);
	      $event->image2 = $filename2;
    	}
    	if ($request->hasFile('image3')) {
	      $image3 = $request->file('image3');
	      $filename3 = time() . 'birthday-3.' . $image3->getClientOriginalExtension();
	      $location3 = public_path('images/uploads');
	      $image3->move($location3, $filename3);
	      // Image::make($image)->resize(800, 400)->save($location);
	      $event->image3 = $filename3;
    	}
    	$event->heading1=$request->heading1;
    	$event->paragraph1=$request->paragraph1;
    	$event->heading2=$request->heading2;
    	$event->paragraph2=$request->paragraph2;
    	$event->heading3=$request->heading3;
    	$event->paragraph3=$request->paragraph3;
    	$event->heading4=$request->heading4;
    	$event->paragraph4=$request->paragraph4;
    	$event->heading5=$request->heading5;
    	$event->paragraph5=$request->paragraph5;
    	$event->save();

    	$request->session()->flash('message','Data Updated');
    	return back();
    }
    public function eventHospitality(Request $request)
    {
    	$events=EventHospitality::all();
    	return view('Admin.eventhospitality')
    	->with('events',$events);
    }
    public function eventHospitalityEdit(Request $request,$id)
    {
    	$events =EventHospitality::where('id',$id)->get();
    	return view('Admin.eventhospitality')
    	->with('events',$events);
    }
    public function eventHospitalityUpdate(EventWeddingRequest $request,$id)
    {
    	$event=EventHospitality::find($request->id);
    	if ($request->hasFile('image1')) {
	      $image1 = $request->file('image1');
	      $filename1 = time() . 'hospitality-1.' . $image1->getClientOriginalExtension();
	      $location1 = public_path('images/uploads');
	      $image1->move($location1, $filename1);
	      // Image::make($image)->resize(800, 400)->save($location);
	      $event->image1 = $filename1;
    	}
    	if ($request->hasFile('image2')) {
	      $image2 = $request->file('image2');
	      $filename2 = time() . 'hospitality-2.' . $image2->getClientOriginalExtension();
	      $location2 = public_path('images/uploads');
	      $image2->move($location2, $filename2);
	      // Image::make($image)->resize(800, 400)->save($location);
	      $event->image2 = $filename2;
    	}
    	if ($request->hasFile('image3')) {
	      $image3 = $request->file('image3');
	      $filename3 = time() . 'hospitality-3.' . $image3->getClientOriginalExtension();
	      $location3 = public_path('images/uploads');
	      $image3->move($location3, $filename3);
	      // Image::make($image)->resize(800, 400)->save($location);
	      $event->image3 = $filename3;
    	}
    	$event->heading1=$request->heading1;
    	$event->paragraph1=$request->paragraph1;
    	$event->heading2=$request->heading2;
    	$event->paragraph2=$request->paragraph2;
    	$event->heading3=$request->heading3;
    	$event->paragraph3=$request->paragraph3;
    	$event->heading4=$request->heading4;
    	$event->paragraph4=$request->paragraph4;
    	$event->heading5=$request->heading5;
    	$event->paragraph5=$request->paragraph5;
    	$event->save();

    	$request->session()->flash('message','Data Updated');
    	return back();
    }
    public function eventOthers(Request $request)
    {
    	$events=EventOthers::all();
    	return view('Admin.eventothers')
    	->with('events',$events);
    }
    public function eventOthersEdit(Request $request,$id)
    {
    	$events =EventOthers::where('id',$id)->get();
    	return view('Admin.eventhospitality')
    	->with('events',$events);
    }
    public function eventOthersUpdate(EventWeddingRequest $request,$id)
    {
    	$event=EventOthers::find($request->id);
    	if ($request->hasFile('image1')) {
	      $image1 = $request->file('image1');
	      $filename1 = time() . 'event-1.' . $image1->getClientOriginalExtension();
	      $location1 = public_path('images/uploads');
	      $image1->move($location1, $filename1);
	      // Image::make($image)->resize(800, 400)->save($location);
	      $event->image1 = $filename1;
    	}
    	if ($request->hasFile('image2')) {
	      $image2 = $request->file('image2');
	      $filename2 = time() . 'event-2.' . $image2->getClientOriginalExtension();
	      $location2 = public_path('images/uploads');
	      $image2->move($location2, $filename2);
	      // Image::make($image)->resize(800, 400)->save($location);
	      $event->image2 = $filename2;
    	}
    	if ($request->hasFile('image3')) {
	      $image3 = $request->file('image3');
	      $filename3 = time() . 'event-3.' . $image3->getClientOriginalExtension();
	      $location3 = public_path('images/uploads');
	      $image3->move($location3, $filename3);
	      // Image::make($image)->resize(800, 400)->save($location);
	      $event->image3 = $filename3;
    	}
    	$event->heading1=$request->heading1;
    	$event->paragraph1=$request->paragraph1;
    	$event->heading2=$request->heading2;
    	$event->paragraph2=$request->paragraph2;
    	$event->heading3=$request->heading3;
    	$event->paragraph3=$request->paragraph3;
    	$event->heading4=$request->heading4;
    	$event->paragraph4=$request->paragraph4;
    	$event->heading5=$request->heading5;
    	$event->paragraph5=$request->paragraph5;
    	$event->save();

    	$request->session()->flash('message','Data Updated');
    	return back();
    }
    public function lighIndex(Request $request)
    {
        $events=Light::all();
        return view('Admin.lighting')
        ->with('events',$events);
    }
    public function lightIndexEdit(Request $request,$id)
    {
        $events=Light::where('id',$id)->get();
        return view('Admin.lighting')
        ->with('events',$events);
    }
    public function lightIndexUpdate(EventWeddingRequest $request,$id)
    {
        $event=Light::find($request->id);
        if ($request->hasFile('image1')) {
          $image1 = $request->file('image1');
          $filename1 = time() . 'lighting-1.' . $image1->getClientOriginalExtension();
          $location1 = public_path('images/uploads');
          $image1->move($location1, $filename1);
          // Image::make($image)->resize(800, 400)->save($location);
          $event->image1 = $filename1;
        }
        if ($request->hasFile('image2')) {
          $image2 = $request->file('image2');
          $filename2 = time() . 'lighting-2.' . $image2->getClientOriginalExtension();
          $location2 = public_path('images/uploads');
          $image2->move($location2, $filename2);
          // Image::make($image)->resize(800, 400)->save($location);
          $event->image2 = $filename2;
        }
        if ($request->hasFile('image3')) {
          $image3 = $request->file('image3');
          $filename3 = time() . 'lighting-3.' . $image3->getClientOriginalExtension();
          $location3 = public_path('images/uploads');
          $image3->move($location3, $filename3);
          // Image::make($image)->resize(800, 400)->save($location);
          $event->image3 = $filename3;
        }
        $event->heading1=$request->heading1;
        $event->paragraph1=$request->paragraph1;
        $event->heading2=$request->heading2;
        $event->paragraph2=$request->paragraph2;
        $event->heading3=$request->heading3;
        $event->paragraph3=$request->paragraph3;
        $event->heading4=$request->heading4;
        $event->paragraph4=$request->paragraph4;
        $event->heading5=$request->heading5;
        $event->paragraph5=$request->paragraph5;
        $event->save();

        $request->session()->flash('message','Data Updated');
        return back();
    }
}
