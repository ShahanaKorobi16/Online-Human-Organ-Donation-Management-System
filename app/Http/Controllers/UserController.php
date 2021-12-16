<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userList(){
        $users = User::all();
        // dd($users);
        return view('admin.layouts.userlist',compact('users'));
    }
    public function userDetails($user_id)
    {

//        collection= get(), all()====== read with loop (foreach)
//       object= first(), find(), findOrFail(),======direct
      $users=User::find($user_id);
//      $user=User::where('id',$user_id)->first();
        return view('admin.layouts.user-details',compact('users'));
    }

    public function userDelete($user_id)
    {
       User::find($user_id)->delete();
       return redirect()->back()->with('success','user Deleted.');
    }
}
