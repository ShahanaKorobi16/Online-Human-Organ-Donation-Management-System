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
       'Hospital_Name'=>'required',
       'Hospital_Bed_No'=>'required|numeric',
       'Contact'=>'required|numeric|digits:11',
       'Email'=>'required',
       'NID_Number'=>'required',
       'Address'=>'required',
       'Organ_Needed'=>'required',
       'Case'=>'required',
       'Post_Date'=>'required',
 
     ]);
       Post::create([
         'Patient_Name'=>$request->Patient_Name,
         'Date_of_Birth'=>$request->Date_of_Birth,
         'Blood_group'=>$request->Blood_group,
         'Hospital_Name'=>$request->Hospital_Name,
         'Hospital_Bed_No'=>$request->Hospital_Bed_No,
         'Contact'=>$request->Contact,
         'Email'=>$request->Email,
         'NID_Number'=>$request->NID_Number,
         'Address'=>$request->Address,
         'Organ_Needed'=>$request->Organ_Needed,
         'Case'=>$request->Case,
         'image'=>$filename,
         'Post_Date'=>$request->Post_Date
  
       ]);
       return redirect()->route('website.post')->with('success','Post created successfully.');
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
public function postEdit($post_id){
  //dd($post_id);
  $addpost = Post::find($post_id);
//dd($addpost);

     return view('website.layouts.post-edit',compact('addpost'));
 
}

public function postUpdate(Request $request,$post_id){
 //dd($request->all());
 //dd($post_id);
 $addpost=Post::find($post_id);
 //dd($addpost);
 $image_name=$addpost->image;
 //              step 1: check image exist in this request.
         if($request->hasFile('image'))
         {
             // step 2: generate file name
             $image_name=date('Ymdhis') .'.'. $request->file('image')->getClientOriginalExtension();
 
             //step 3 : store into project directory
 
             $request->file('image')->storeAs('/$addpost',$image_name);
 
         }

 if ($addpost) {
   $addpost->update([
     // 'name'=>$request->name,
     'Patient_Name'=>$request->Patient_Name,
     'Date_of_Birth'=>$request->Date_of_Birth,
     'Blood_group'=>$request->Blood_group,
     'Hospital_Name'=>$request->Hospital_Name,
     'Hospital_Bed_No'=>$request->Hospital_Bed_No,
     'Contact'=>$request->Contact,
     'Email'=>$request->Email,
     'NID_Number'=>$request->NID_Number,
     'Address'=>$request->Address,
     'Organ_Needed'=>$request->Organ_Needed,
     'Case'=>$request->Case,
     'Post_Date'=>$request->Post_Date
     ]);
    
     return redirect()->route('website.post')->with('success','Post updated!');
 }

}
public function pshow()
{
    $addposts=Post::all();
    //dd($addposts);
    return view('website.layouts.patient-post-show',compact('addposts'));
}
}

