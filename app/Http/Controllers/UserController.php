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
}
