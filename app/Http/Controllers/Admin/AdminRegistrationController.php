<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use App\AdminRole;

class AdminRegistrationController extends Controller
{
    public function adminListIndex(Request $request)
    {
        return view('Admin.adminlist');
    }
    public function getAdminList(Request $request)
    {
        $data=Admin::all();
        $role=AdminRole::all();
        return response()->json(array('status'=>'success','data'=>$data,'role'=>$role));
    }
    public function insertAdminList(Request $request)
    {
        $data=new Admin();
        $data->admin_role_id=$request->role;
        if ($request->hasFile('image')) {

            $image = $request->file('image');
            $user_image = time().'Admin-image-1.'.$image->getClientOriginalExtension();
            $location = public_path('assets/images/Admin');
            $image->move($location, $user_image);
            $data->admin_image = $user_image;
        }
        $data->admin_name=$request->name;
        $data->admin_email=$request->email;
        $data->admin_address=$request->address;
        $data->admin_contactno=$request->phnnum;
        $data->admin_password=Hash::make($request->pass);
        $data->save();
        return response()->json(array('status'=>'success'));
    }
}
