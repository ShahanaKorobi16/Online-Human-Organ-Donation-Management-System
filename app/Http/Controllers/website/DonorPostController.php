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
//dd($request->all());
 $request->validate([
   'Donor_Name'=>'required',
   'Date_of_Birth'=>'required',
   'Blood_group'=>'required',
   'Contact'=>'required',
   'Email'=>'required',
   'Address'=>'required',
   'Organ_wants_to_donate'=>'required',
   'Post_Date'=>'required',
 ]);

  //dd ($request->all());
  Donorpost::create([
     'Donor_Name'=>$request->Donor_Name,
     'Date_of_Birth'=>$request->Date_of_Birth,
     'Blood_group'=>$request->Blood_group,
     'Contact'=>$request->Contact,
     'Email'=>$request->Email,
     'Address'=>$request->Address,
     'Organ_wants_to_donate'=>$request->Organ_wants_to_donate,
     'Post_Date'=>$request->Post_Date

   ]);
   return redirect()->back()->with('msg','Donation Post created successfully.');
}
}