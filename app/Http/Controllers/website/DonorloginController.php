<?php

namespace App\Http\Controllers\website;
use App\Models\Donor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonorloginController extends Controller
{
    public function registration(){
        return view('website.layouts.don-reg');
}
public function registrationPost(Request $request){
    // dd($request->all());
    Donor::create([
        'username'=>$request->Username,
        'email'=>$request->Email,
        'password'=>bcrypt($request->Password),
        'date_of_birth'=>$request->Date_of_birth,
        'weight'=>$request->Weight,
        'blood_group'=>$request->Blood_group,
        'gender'=>$request->Gender,
        'organ_wants_to_donate'=>$request->Organ_wants_to_donate,
        'details'=>$request->Details, 
        'contact'=>$request->Contact,
        'address'=>$request->Address,
    ]);
    return redirect()->route('donor.login');
}

public function login(){
    return view('website.layouts.donor-login');
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
        return redirect()->route('website.home');
    }
    else
    return redirect()->route('donor.login');

}
public function logout(){
    Auth::logout();
    return redirect()->route('website.home');
}
}
