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
       
        $adposts=Donorpost::where('status','approved')->get();
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
        $users = User::all();
        return view('website.layouts.user-profile',compact('users'));
}
    public function profileshow()
    {    
        
          //dd($request->all());
       //dd($user_id);
       //$users = User::find($user_id);
       //dd($users);
     //  dd($request->all());
        // User::create([
        //     'username'=>$request->Username,
        //     'email'=>$request->Email,
        //     'password'=>bcrypt($request->Password),
        //     'date_of_birth'=>$request->Date_of_birth,
        //     'weight'=>$request->Weight,
        //     'blood_group'=>$request->Blood_group,
        //     'gender'=>$request->Gender,
             
        //     'contact'=>$request->Contact,
        //     'address'=>$request->Address,
        // ]);
        return redirect()->route('website.profile');
        
    
    }
    public function profileEdit($user_id){
        //dd($user_id);
        $users = User::find($user_id);
       // dd($user);
      
           return view('website.layouts.profile-edit',compact('users'));
       
     }
     
     public function profileupdate(Request $request,$user_id){
       
      //  dd($request->all());
       // dd($user_id);
       $users = User::find($user_id);
     
       
       if ($users) {
         $users->update([
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
      //  dd($users);
           return redirect()->route('website.home')->with('success','profile updated!');
       }
     
     }
    public function mission()
    {
        return view('website.layouts.mission');
    }
    public function vission()
    {
        return view('website.layouts.vission');
    }
    public function motivation()
    {
        return view('website.layouts.motivation');
    }
    public function objective()
    {
        return view('website.layouts.objective');
    }
}

