<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
//     public function post5(){
        
   
//      $addposts=Post::all();
//        // dd($addposts);
//         return view('admin.layouts.post',compact('addposts'));
// }
 
//    public function store(Request $request)
//    {
//         dd(date('Ymdhms'));
//         // dd($request->all());
//         $filename = '';
//         if ($request->hasFile('image')) {
//             $file = $request->file('image');
//             $filename = date('Ymdhms').'.'.$file->getclientOriginalExtension();
//             $file->storeAs('/uploads',$filename);
//         }

//     $request->validate([
//       'Patient_Name'=>'required',
//       'Patient_Age'=>'required',
//       'Patient_Blood_group'=>'required',
//       'Patient_issue'=>'required',

//     ]);
//       Post::create([
//         'Patient_Name'=>$request->Patient_Name,
//         'Patient_Age'=>$request->Patient_Age,
//         'Patient_Blood_group'=>$request->Patient_Blood_group,
//         'Patient_issue'=>$request->Patient_issue,
//         'image'=>$filename
 
//       ]);
//       return redirect()->back()->with('msg','Post created successfully.');
//    }
   
}

