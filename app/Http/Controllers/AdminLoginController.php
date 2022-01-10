<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function login()
    {

       return view('admin.login');

    }

    public function doLogin(Request $request)
    {
        //dd($request->all());

        $userInfo=[
//        $credentials['email']=$request->user_email;
//        $credentials['password']=$request->user_password;
//        dd($credentials);
//        $credentials=$request->only('user_email','user_password');
       'password' => $request->Password,
        'email' => $request->Email,
    ];
//dd((Auth::attempt($userInfo)));
        if(Auth::attempt($userInfo)){
            return redirect()->route('admin')->with('success','Login successful.');
        }
        return redirect()->back()->withErrors('Invalid user credentials');

    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('website.home')->with('success','Logging out.');
    }
}
