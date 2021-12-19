<?php

namespace App\Http\Controllers\website;
use App\Models\Donorpost;
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
   'NID_Number'=>'required',
   'Address'=>'required',
   'Organ_wants_to_donate'=>'required',
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
}