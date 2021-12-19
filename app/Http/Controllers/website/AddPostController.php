<?php

namespace App\Http\Controllers\website;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddPostController extends Controller
{
    public function post(){
        $addposts=Post::all();
       // dd($addposts);
        return view('website.layouts.post',compact('addposts'));

    
    }
    public function create(Request $request){
        return view('website.layouts.post-create');
    
    }
    public function store(Request $request)
    {
         //dd(date('Ymdhms'));
         // dd($request->all());
         $filename = '';
         if ($request->hasFile('image')) {
             $file = $request->file('image');
             $filename = date('Ymdhms').'.'.$file->getclientOriginalExtension();
             $file->storeAs('/uploads',$filename);
         }
 
     $request->validate([
       'Patient_Name'=>'required',
       'Date_of_Birth'=>'required',
       'Blood_group'=>'required',
       'Contact'=>'required|numeric|digits:11',
       'Email'=>'required',
       'Case'=>'required',
       'Post_Date'=>'required',
 
     ]);
       Post::create([
         'Patient_Name'=>$request->Patient_Name,
         'Date_of_Birth'=>$request->Date_of_Birth,
         'Blood_group'=>$request->Blood_group,
         'Contact'=>$request->Contact,
         'Email'=>$request->Email,
         'Case'=>$request->Case,
         'image'=>$filename,
         'Post_Date'=>$request->Post_Date
  
       ]);
       return redirect()->back()->with('msg','Post created successfully.');
}

public function postDetails($post_id)
{

//        collection= get(), all()====== read with loop (foreach)
//       object= first(), find(), findOrFail(),======direct
  $addpost=Post::find($post_id);
//      $post=Post::where('id',$post_id)->first();
    return view('website.layouts.post-details',compact('addpost'));
}

public function postDelete($post_id)
{
   Post::find($post_id)->delete();
   return redirect()->back()->with('success','Post Deleted.');
}
}

