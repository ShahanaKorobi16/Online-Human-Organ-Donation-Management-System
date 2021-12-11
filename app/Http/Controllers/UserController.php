<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userList(){
        $users = User::all();
        return view('admin.layouts.userlist',compact('users'));
    }
}
