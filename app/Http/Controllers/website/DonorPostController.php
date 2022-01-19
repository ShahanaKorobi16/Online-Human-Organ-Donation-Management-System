<?php

namespace App\Http\Controllers\website;
use App\Models\Donorpost;
use App\Models\Message;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonorPostController extends Controller
{
    public function dpost(){
        $adposts=Donorpost::all();
        //dd($adposts);
        return view('website.layouts.donor-post',compact('adposts'));
}
public function dcreate(Request $request){
    return view('website.layouts.donor-post-create');

}
public function dstore(Request $request)

{
  //dd($id);
  //dd(date('Ymdhms'));
        // dd($request->all());
         $filename = '';
         if ($request->hasFile('image')) {
             $file = $request->file('image');
             $filename = date('Ymdhms').'.'.$file->getclientOriginalExtension();
             $file->storeAs('/uploads',$filename);
         }
  //dd($id);
 
// dd($request->all());
//dd($request->all());
 $request->validate([
  //'user_id'=>auth()->user()->id,
  //'Username'=>auth()->user()->username,
  //  'Donor_Name'=>'required',
  //  'Date_of_Birth'=>'required',
  //  'Blood_group'=>'required',
  //  'Contact'=>'required',
  //  'Email'=>'required',
   'NID_Number'=>'required|numeric',
  //  'Address'=>'required',
   'Organ_wants_to_donate'=>'required',
   'Quantity'=>'required',
   'Details'=>'required',
   'Post_Date'=>'required',
 ]);

  //dd ($request->all());
  Donorpost::create([
    'image'=>$filename,
    'Username'=>auth()->user()->username,
     'user_id'=>auth()->user()->id,
     'Date_of_birth'=>auth()->user()->date_of_birth,
     'Blood_group'=>auth()->user()->blood_group,
     'Contact'=>auth()->user()->contact,
     'Email'=>auth()->user()->email,
     'NID_Number'=>$request->NID_Number,
     'Address'=>auth()->user()->address,
     'Organ_wants_to_donate'=>$request->Organ_wants_to_donate,
     'Quantity'=>$request->Quantity,
     'Details'=>$request->Details,
     'Post_Date'=>$request->Post_Date,
     //'message_id'=>$id,
     

   ]);
   return redirect()->back()->with('success','Your Post is pending!!!!');
}
public function dpostDetails($donorpost_id)
{
   //dd($donorpost_id);
  //dd("ok");

//        collection= get(), all()====== read with loop (foreach)
//       object= first(), find(), findOrFail(),======direct
  $adpost=Donorpost::find($donorpost_id);
//      $post=Post::where('id',$post_id)->first();
    return view('website.layouts.donor-post-details',compact('adpost'));
}

public function dpostDelete($donorpost_id)
{
  Donorpost::find($donorpost_id)->delete();
   return redirect()->back()->with('success','Post Deleted.');
}

public function dpostEdit($donorpost_id){
   //dd($donorpost_id);
   $adpost = Donorpost::find($donorpost_id);
  // dd($adpost);
 
      return view('website.layouts.donor-post-edit',compact('adpost'));
  
}

public function dpostUpdate(Request $request,$donorpost_id){
  
   //dd($request->all());
  // dd($donorpost_id);
  $adpost=Donorpost::find($donorpost_id);
 
 //dd($adpost);
 $image_name=$adpost->image;
 //              step 1: check image exist in this request.
         if($request->hasFile('image'))
         {
             // step 2: generate file name
             $image_name=date('Ymdhis') .'.'. $request->file('image')->getClientOriginalExtension();
 
             //step 3 : store into project directory
 
             $request->file('image')->storeAs('/uploads',$image_name);
 
         }
  // dd($adpost);
  if ($adpost) {
    $adpost->update([
      // 'name'=>$request->name,
      'image'=>$image_name,
    //   'Donor_Name'=>$request->Donor_Name,
    //  'Date_of_Birth'=>$request->Date_of_Birth,
    //  'Blood_group'=>$request->Blood_group,
    //  'Contact'=>$request->Contact,
    //  'Email'=>$request->Email,
     'NID_Number'=>$request->NID_Number,
    //  'Address'=>$request->Address,
     'Organ_wants_to_donate'=>$request->Organ_wants_to_donate,
     'Quantity'=>$request->Quantity,
     'Details'=>$request->Details,
     'Post_Date'=>$request->Post_Date
      ]);
     
      return redirect()->route('website.postshow')->with('success','Post updated!');
  }

}

public function message(){
  // dd($id);
        $msgs=Message::all();
        //dd($msgs);
        return view('admin.layouts.message',compact('msgs'));
}
public function mcreate($id){
  // dd($id);
  $post_details=Donorpost::find($id);
    return view('website.layouts.create-message',compact('post_details'));

}

public function mstore($id,Request $request)
{
  // dd($id);
 
// dd($request->all());
 $request->validate([
   //'Patient_Name'=>'required',
  
  //  'Contact'=>'required',
  //  'Email'=>'required',

  //  'Address'=>'required',
   'Why_need_this_organ'=>'required',
   
 ]);

  //dd ($request->all());
  Message::create([
    
    //  'Patient_Name'=>$request->Patient_Name,
     'user_id'=>auth()->user()->id,
     'Username'=>auth()->user()->username,
  
     'donorpost_id'=>$id,
     'Contact'=>auth()->user()->contact,
     'Email'=>auth()->user()->email,
     'Address'=>auth()->user()->address,
     'Why_need_this_organ'=>$request->Why_need_this_organ,
    

   ]);
   return redirect()->back()->with('success','Message created successfully.');
}
public function dpostSearch(){
  // dd(request()->all());
  $key = request()->search;
  $adposts = Donorpost::where('Organ_wants_to_donate','LIKE',"%{$key}%")->get();
  // dd($adposts);
  return view('website.layouts.search-donor-post',compact('adposts'));
}

public function approve($id){
  //dd($id);
  $adpost=Donorpost::find($id);
  $adpost->update([
    'status'=> 'approved'
  ]);
  return redirect()->back()->with('success','Post approved!!!!');

}

public function showComment($id){
  //dd($id);
  $msgs =Message::find($id);
//dd($msgs);
  return view('website.layouts.postshow',compact('msgs'));
}


public function responsecomment($id){
 // dd($message_id);
//  dd($id);
  $responses=Message::where('donorpost_id',$id)->get();
  $no_of_comments= $responses->count();
  // dd($no_of_comments);
  // $responses=Message::find($message_id);
 //dd($responses);
  return view('website.layouts.response-message',compact('responses','no_of_comments'));
}
}
