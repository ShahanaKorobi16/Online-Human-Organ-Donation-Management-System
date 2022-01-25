<?php

namespace App\Http\Controllers\website;
use App\Models\Post;
use App\Models\User;
use App\Models\Organ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddPostController extends Controller
{
    public function post(){
        $addposts=Post::with('organ')->get(); 
       // dd($addposts);
        return view('website.layouts.post',compact('addposts'));

    
    }
    public function create(){
//dd($id);
$addposts=User::all();
$organs=Organ::all();
        return view('website.layouts.post-create',compact('addposts','organs'));
    
    }
    public function store(Request $request)
    {
         //dd(date('Ymdhms'));
        
       //  dd($request->all());
         $filename = '';
         if ($request->hasFile('image')) {
             $file = $request->file('image');
             $filename = date('Ymdhms').'.'.$file->getclientOriginalExtension();
             $file->storeAs('/uploads',$filename);
         }
         //dd($id);
      //   dd($request->all());
     $request->validate([
     // 'Username'=>auth()->user()->username,
      // 'user_id'=>auth()->user()->id,
      // 'Date_of_birth'=>auth()->user()->Date_of_birth,
      // 'Blood_group'=>auth()->user()->Blood_group,
       'Hospital_Name'=>'required',
       'Hospital_Bed_No'=>'required|numeric',
      // 'Contact'=>auth()->user()->contact,
      // 'Email'=>auth()->user()->email,
       //'NID_Number'=>'required',
     //  'Address'=>auth()->user()->address,
       //'Organ_Needed'=>'required',
       'Case'=>'required',
       'Post_Date'=>'required',
 
     ]);
       Post::create([
       
         'Username'=>auth()->user()->username,
         'user_id'=>auth()->user()->id,
         'Date_of_birth'=>auth()->user()->date_of_birth,
         'Blood_group'=>auth()->user()->blood_group,
         'Hospital_Name'=>$request->Hospital_Name,
         'Hospital_Bed_No'=>$request->Hospital_Bed_No,
         'Contact'=>auth()->user()->contact,
         'Email'=>auth()->user()->email,
         'NID'=>auth()->user()->nid,
         'Address'=>auth()->user()->address,
         'organ_id'=>$request->organ_id,
         'Case'=>$request->Case,
         'image'=>$filename,
         'Post_Date'=>$request->Post_Date
  
       ]);
       return redirect()->back()->with('success','Your Post is pending!!!!');
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
 
             $request->file('image')->storeAs('/uploads',$image_name);
 
         }

 if ($addpost) {
   $addpost->update([
     // 'name'=>$request->name,
    // 'Patient_Name'=>$request->Patient_Name,
    //  'user_id'=>$request->user_id,
    // 'Date_of_Birth'=>$request->Date_of_Birth,
    // 'Blood_group'=>$request->Blood_group,
     'Hospital_Name'=>$request->Hospital_Name,
     'Hospital_Bed_No'=>$request->Hospital_Bed_No,
   //  'Contact'=>$request->Contact,
    // 'Email'=>$request->Email,
     'NID_Number'=>$request->NID_Number,
    // 'Address'=>$request->Address,
     'organ_id'=>$request->organ_id,
     'Case'=>$request->Case,
     'image'=>$image_name,
     'Post_Date'=>$request->Post_Date
     ]);
    
     return redirect()->route('website.patient.post.show')->with('success','Post updated!');
 }

}
public function pshow()
{
  //dd(request()->all());
    $addposts=Post::where('status','approved')->get();
    $organs=Organ::all();

    
        //dd($adposts);
     
    //dd($addposts);
    return view('website.layouts.patient-post-show',compact('addposts','organs'));
}
public function postSearch(){
  // dd(request()->all());
  $key = request()->search;
  $addposts = Post::where('Organ_Needed','LIKE',"%{$key}%")->get();
  // dd($addposts);
  return view('website.layouts.search-post',compact('addposts'));
}
public function postapprove($id){
 // dd($id);
  $addpost=Post::find($id);
  $addpost->update([
    'status'=> 'approved'
  ]);
  return redirect()->back()->with('success','Post approved!!!!');

}
}

