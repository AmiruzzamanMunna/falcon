<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\UserList;
use App\UserProfileLinks;

class ProfileController extends Controller
{
    public function userProfile(Request $request)
    {
        $user=UserList::where('signup_id',$request->session()->get('loggedUser'))
                        ->first();

        $links=UserProfileLinks::where('user_profilelinks_user_id',$request->session()->get('loggedUser'))
                                ->get();
        return view('User.profile')
                ->with('links',$links)
                ->with('user',$user);
    }
    public function userProfileUpdate(Request $request)
    {
        $user=UserList::where('signup_id',$request->session()->get('loggedUser'))
                        ->update([

                            'signup_name'=>$request->name,
                            'signup_professional_tag'=>$request->ptag,
                            'signup_professionalbio'=>$request->pbio,
                            'signup_wblinks'=>$request->weblink,
                            'signup_fblinks'=>$request->fblink,
                            'signup_ttlinks'=>$request->twlink,
                        ]);


        if(!empty($request->links)){

            $links=$request->links;

            foreach($links as $key=>$val){

                $data = new UserProfileLinks();
                $data->user_profilelinks_user_id=$request->session()->get('loggedUser');
                $data->user_profilelinks_link=$links[$key];
                $data->save();
            }
        }
        if($request->uplinksid){

            $uplinksid=$request->uplinksid;
            $uplinks=$request->uplinks;

            foreach($uplinksid as $key=>$val){

                $data = UserProfileLinks::where('user_profilelinks_user_id',$request->session()->get('loggedUser'))
                                            ->where('user_profilelinks_id',$uplinksid[$key])->update(['user_profilelinks_link'=>$uplinks[$key]]);
            }
        }



        return response()->json(array('status'=>'success'));
    }

    public function deleteUserLinks(Request $request)
    {
        $data=UserProfileLinks::where('user_profilelinks_user_id',$request->session()->get('loggedUser'))
                                ->where('user_profilelinks_id',$request->id)
                                ->delete();

        return response()->json(array('status'=>'success'));

    }
}
