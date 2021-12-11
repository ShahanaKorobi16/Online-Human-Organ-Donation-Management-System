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
        'Username'=>$request->Username,
        'Email'=>$request->Email,
        'Password'=>bcrypt($request->Password),
        'Date_of_birth'=>$request->Date_of_birth,
        'Weight'=>$request->Weight,
        'Blood_group'=>$request->Blood_group,
        'Gender'=>$request->Gender,
        'Organ_Needed'=>$request->Organ_Needed,
        'Details'=>$request->Details, 
        'Contact'=>$request->Contact,
        'Address'=>$request->Address,
    ]);
    return redirect()->route('user.login');
}

public function login(){
    return view('website.layouts.login');
}
public function doLogin(Request $request){
    // dd($request->all());
    $userpost=$request->except('_token');
    // dd($userpost);
    if(Auth::attempt($userpost))
    {
        return redirect()->route('website.home');
    }
    else
    return redirect()->route('user.login');

}
public function logout(){
    Auth::logout();
    return redirect()->route('website.home');
}
}