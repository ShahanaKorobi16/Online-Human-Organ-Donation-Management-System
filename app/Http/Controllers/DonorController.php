<?php

namespace App\Http\Controllers;
use App\Models\Donor;
use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function donor(){
        $donors=Donor::all();
        //dd($donors);
        return view('admin.layouts.donor',compact('donors'));
    }
    public function reg(Request $request){
        return view('admin.layouts.reg-donor');
    
    }
    public function add(Request $request) {
       
      //dd($request->all());
        $request->validate([
          'Name'=>'required',
          'Date_of_birth'=>'required|date',
          'Weight'=>'required|numeric',
          'Blood_group'=>'required',
          'Gender'=>'required',
          'Organ_wants_to_donate'=>'required',
          'Details'=>'required',
          'Contact'=>'required|numeric',
          'Email'=>'required',
          'Address'=>'required',
    
        ]);
           //dd ($request->all());

          Donor::create([
            'Name'=>$request->Name,
            'Date_of_birth'=>$request->Date_of_birth,
            'Weight'=>$request->Weight,
            'Blood_group'=>$request->Blood_group,
            'Gender'=>$request->Gender,
            'Organ_wants_to_donate'=>$request->Organ_wants_to_donate,
            'Details'=>$request->Details,
            'Contact'=>$request->Contact,
            'Email'=>$request->Email,
            'Address'=>$request->Address,
     
          ]);
          return redirect()->back()->with('msg','Registration successfull.');
       }
}
