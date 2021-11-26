<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function demo(){
        return view('admin.index');
    }
    public function adminn(){
        return view('admin.layouts.admin');
    }
    public function contact(){
        return view('admin.layouts.contact');
        }
    
    public function postCreate(){
        return view('admin.layouts.create-post');
    }
    

     public function store(Request $request){
    //    dd ($request->all());
       Post::create([

           'Patient_Name'=> $request->Patient_Name,
           'Patient_Age'=> $request->Patient_Age,
           'Patient_Blood_group'=> $request->Patient_Blood_group,
           'Patient_issue'=> $request->Patient_issue,

       ]);
       return redirect()->back();
    }
   
}