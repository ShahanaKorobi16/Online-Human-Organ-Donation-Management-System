<?php

namespace App\Http\Controllers\website;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function registration(){
        return view('website.layouts.registration');
}
public function registrationPost(Request $request){
    // dd($request->all());
    User::create([
        'username'=>$request->Username,
        'email'=>$request->Email,
        'password'=>bcrypt($request->Password),
        'date_of_birth'=>$request->Date_of_birth,
        'weight'=>$request->Weight,
        'blood_group'=>$request->Blood_group,
        'gender'=>$request->Gender,
         
        'contact'=>$request->Contact,
        'address'=>$request->Address,
    ]);
    return redirect()->route('user.login');
}

public function login(){
    return view('website.layouts.login');
}
public function doLogin(Request $request){
   
    $userpost=[
        'password' => $request->Password,
        'email' => $request->Email,
    ];
// dd($userpost);
     //dd(auth()->attempt($userpost));

    if(auth()->attempt($userpost))
    {
        return redirect()->route('website.home')->with('success','Login Successful!');
    }
    else
    return redirect()->route('user.login')->with('success','Invalid User Email or Password. Try Again !!!');

}
public function logout(){
    Auth::logout();
    return redirect()->route('website.home')->with('success','Logout Successful!');
}
}