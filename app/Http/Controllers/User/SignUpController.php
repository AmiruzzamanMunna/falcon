<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\UserList;

class SignUpController extends Controller
{
    public function signUp(Request $request)
    {
        
        return view('User.signup');
    }
    public function signUpStore(Request $request)
    {

        $name=$request->name;
        $email=$request->email;
        $address=$request->address;
        $phnnum=$request->phnnum;
        $password=$request->password;

        $data=UserList::where('signup_email',$email)->first();

        if($data){

            return response()->json(array('status'=>'exist'));

        }else{

            $data=new UserList();
            $data->signup_name=$name;
            $data->signup_email=$email;
            $data->signup_address=$address;
            $data->signup_phonum=$phnnum;
            $data->signup_password=Hash::make($password);
            $data->save();
        
            return response()->json(array('status'=>'success'));

        }

        
    }
}
