<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\AdminRole;
use App\Permission;
use App\RolePermission;
use DB;

class RoleController extends Controller
{
    public function roleIndex(Request $request)
    {
        return view('Admin.role');
    }
    public function getRoleList(Request $request)
    {
        $data=AdminRole::all();
        return response()->json(array('status'=>'success','data'=>$data));
    }
    public function insertRole(Request $request)
    {
        $name=$request->name;
        $data=new AdminRole();
        $data->adminrole_name=$name;
        $data->save();
        return response()->json(array('status'=>'success'));
    }
    public function editRole(Request $request)
    {
        $id=$request->id;
        $data=AdminRole::where('adminrole_id',$id)->first();
        return response()->json(array('status'=>'success','data'=>$data));
    }
    public function editRoleUpdate(Request $request)
    {
        $id=$request->id;
        $data=AdminRole::where('adminrole_id',$id)->update(['adminrole_name'=>$request->name]);
        return response()->json(array('status'=>'success'));
    }
    public function deleteRole(Request $request)
    {
        $id=$request->id;
        $data=AdminRole::where('adminrole_id',$id)->delete();
    }
    public function rolePermission(Request $request)
    {
        $id=$request->id;
        $role=AdminRole::where('adminrole_id',$id)->first();
        $permission=Permission::where('permission_parent_id',0)->get();
        $subPermission=DB::select("
                SELECT 
                    tbl_permission.permission_id AS autoid,
                    per.permission_id,
                    per.permission_parent_id,
                    per.permission_name
                FROM
                    tbl_permission
                        LEFT JOIN
                    tbl_permission AS per ON per.permission_parent_id = tbl_permission.permission_id
                WHERE
                    per.permission_parent_id != 0
        ");
        return response()->json(array('status'=>'success','data'=>$role,'permission'=>$permission,'subPermission'=>$subPermission));
    }
    public function permissionStore(Request $request)
    {
        $id=$request->roleId;
        $permissionid=$request->permissionid;

        foreach($permissionid as $key=>$val){

            $data=new RolePermission();
            $data->role_permission_role_id=$id;
            $data->role_permission_per_id=$permissionid[$key];
            $data->save();
        }

        return response()->json(array('status'=>'success'));

        

    }
}
