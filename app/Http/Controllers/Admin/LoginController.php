<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use App\AdminRole;
use App\RolePermission;

class LoginController extends Controller
{
    public function loginAdmin(Request $request)
    {
        return view('Admin.login');
    }
    public function loginAdminCheck(Request $request)
    {
        $email=$request->email;
        $pass=$request->pass;

        $data=Admin::where('admin_email',$email)->first();

        if($data && Hash::check($pass, $data->admin_password)){

            $request->session()->put('loggedAdmin',$data->admin_id);

            $permission=RolePermission::where('role_permission_role_id',$data->admin_role_id)
                                        ->get();

            $request->session()->put('permission',$permission);
            

            return response()->json(array('status'=>'success'));

        }else{

            return response()->json(array('status'=>'error'));
        }

    }
    public function adminLogout(Request $request)
    {
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect()->route('admin.loginAdmin');
    }
}
