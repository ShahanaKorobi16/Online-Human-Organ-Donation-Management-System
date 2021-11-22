<?php

namespace App\Http\Controllers;
use App\Models\Organ;
use Illuminate\Http\Request;

class OrganController extends Controller
{
    public function list(){
        
        $organs = Organ::all();
        //dd($organs);
        return view('admin.layouts.category.category',compact('organs'));
}
public function form(){
        

    return view('admin.layouts.category.category-create');
}
public function add(Request $request){
    Organ::create([
        'Organ_name'=>$request->Organ_name,
        'Organ_details'=>$request->Organ_details
    ]);

    return redirect()->route('admin.category');
}
}
