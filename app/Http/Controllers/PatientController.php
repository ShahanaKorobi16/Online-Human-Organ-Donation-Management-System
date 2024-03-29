<?php

namespace App\Http\Controllers;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function patient(){
        $patients=Patient::all();
        //dd($patients);
        return view('admin.layouts.patient',compact('patients'));
    
    }
    public function reg(Request $request){
        return view('admin.layouts.reg-patient');
    
    }
    public function add(Request $request) {
        //  dd($request->all());
         $filename = '';
         if ($request->hasFile('image')) {
             $file = $request->file('image');
             $filename = date('Ymdhms').'.'.$file->getclientOriginalExtension();
             $file->storeAs('/uploads',$filename);
         }

        $request->validate([
          'Name'=>'required',
          'Age'=>'required|numeric',
          'address'=>'required',
          'contact'=>'required|numeric',
          'email'=>'required',
          'Blood_group'=>'required',
          'Gender'=>'required',
          'Case'=>'required',
          'Organ_needed'=>'required',
    
        ]);
           //dd ($request->all());

          Patient::create([
            'Name'=>$request->Name,
            'Age'=>$request->Age,
            'Address'=>$request->address,
            'Contact'=>$request->contact,
            'Email'=>$request->email,
            'Blood_group'=>$request->Blood_group,
            'Gender'=>$request->Gender,
            'Case'=>$request->Case,
            'Organ_needed'=>$request->Organ_needed,
            'image'=>$filename
          ]);
          return redirect()->back()->with('msg','Registration successful.');
       }
}
