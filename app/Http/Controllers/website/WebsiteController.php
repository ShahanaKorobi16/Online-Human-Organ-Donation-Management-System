<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use App\Models\Donorpost;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        $addposts=Post::all();
        //dd($addposts);  
       // return view('website.index',compact('addposts'));
        return view('website.index',compact('addposts'));
    }
    
    public function contact()
    {
        return view('website.layouts.contact');
    }
    public function show()
    {
        $adposts=Donorpost::all();
        //dd($adposts);
        return view('website.layouts.postshow',compact('adposts'));
    }
    public function showdetails()
    {
        $adposts=Donorpost::all();
        //dd($adposts);
        return view('website.layouts.post-details-show',compact('adposts'));
    }
   
   
    public function profile(){
        return view('website.layouts.user-profile');
}
    public function profilestore(Request $request)
    {    // dd($request->all());
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
        return redirect()->route('website.profile');
        
    
    }
}

