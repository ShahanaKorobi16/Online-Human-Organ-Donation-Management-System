<?php

namespace App\Http\Controllers\website;
use App\Models\Donorpost;
use App\Models\Message;
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
  //dd(date('Ymdhms'));
        // dd($request->all());
         $filename = '';
         if ($request->hasFile('image')) {
             $file = $request->file('image');
             $filename = date('Ymdhms').'.'.$file->getclientOriginalExtension();
             $file->storeAs('/uploads',$filename);
         }
 
//dd($request->all());
 $request->validate([
   'Donor_Name'=>'required',
   'Date_of_Birth'=>'required',
   'Blood_group'=>'required',
   'Contact'=>'required',
   'Email'=>'required',
   'NID_Number'=>'required|numeric',
   'Address'=>'required',
   'Organ_wants_to_donate'=>'required',
   'Quantity'=>'required',
   'Details'=>'required',
   'Post_Date'=>'required',
 ]);

  //dd ($request->all());
  Donorpost::create([
    'image'=>$filename,
     'Donor_Name'=>$request->Donor_Name,
     'Date_of_Birth'=>$request->Date_of_Birth,
     'Blood_group'=>$request->Blood_group,
     'Contact'=>$request->Contact,
     'Email'=>$request->Email,
     'NID_Number'=>$request->NID_Number,
     'Address'=>$request->Address,
     'Organ_wants_to_donate'=>$request->Organ_wants_to_donate,
     'Quantity'=>$request->Quantity,
     'Details'=>$request->Details,
     'Post_Date'=>$request->Post_Date

   ]);
   return redirect()->back()->with('success','Donation Post created successfully.');
}
public function dpostDetails($donorpost_id)
{
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
      'Donor_Name'=>$request->Donor_Name,
     'Date_of_Birth'=>$request->Date_of_Birth,
     'Blood_group'=>$request->Blood_group,
     'Contact'=>$request->Contact,
     'Email'=>$request->Email,
     'NID_Number'=>$request->NID_Number,
     'Address'=>$request->Address,
     'Organ_wants_to_donate'=>$request->Organ_wants_to_donate,
     'Quantity'=>$request->Quantity,
     'Details'=>$request->Details,
     'Post_Date'=>$request->Post_Date
      ]);
     
      return redirect()->route('website.postshow')->with('success','Post updated!');
  }

}

public function message(){
        $msgs=Message::all();
        //dd($msgs);
        return view('admin.layouts.message',compact('msgs'));
}
public function mcreate(Request $request){
    return view('website.layouts.create-message');

}

public function mstore(Request $request)
{
 
//dd($request->all());
 $request->validate([
   'Patient_Name'=>'required',
  
   'Contact'=>'required',
   'Email'=>'required',

   'Address'=>'required',
   'Why_need_this_organ'=>'required',
   
 ]);

  //dd ($request->all());
  Message::create([
    
     'Patient_Name'=>$request->Patient_Name,
     'Contact'=>$request->Contact,
     'Email'=>$request->Email,
     'Address'=>$request->Address,
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
}