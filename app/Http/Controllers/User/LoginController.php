<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\UserList;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        return view('User.login');
    }
    public function loginCheck(Request $request)
    {
        $data=UserList::where('signup_email',$request->email)->first();

        if($data && Hash::check($request->password, $data->signup_password)){

            $request->session()->put('loggedUser',$data->signup_id);

            return redirect()->route('user.index');

        }else{

            $request->session()->flash('message','Incorrect username & Password');

            return back();
        }
    }
    public function logOut(Request $request)
    {
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->guest(route('user.index'));
    }
}
