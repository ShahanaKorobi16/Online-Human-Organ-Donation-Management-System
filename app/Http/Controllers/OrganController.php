<?php

namespace App\Http\Controllers;
use App\Models\Organ;
use App\Models\Donorpost;

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
//    dd($request ->all());
    $request->validate([
    'Organ_name'=>'required | unique:organs,Organ_name',
    'Organ_details'=>'required',
]);
    Organ::create([
        'Organ_name'=>$request->Organ_name,
        'Organ_details'=>$request->Organ_details
    ]);
    
    return redirect()->back()->with('msg','Organ added successful.');

}
public function organDetails($category_id)
{

    // dd($category_id);
$category = Organ::find($category_id);
// dd($category->Organ_name);


    $organs = Donorpost::where('Organ_wants_to_donate',$category->Organ_name)->get();
   
    // dd($organs);
    return view('admin.layouts.category.category-details',compact('organs'));

// //        collection= get(), all()====== read with loop (foreach)+
// //       object= first(), find(), findOrFail(),======direct
// $organs = Organ::find($category_id);
// //      $organs = Organ::where('id',$category_id)->first();
    // return view('admin.layouts.category.category-details',compact('organs'));
}

public function organDelete($category_id)
{
    Organ::find($category_id)->delete();
   return redirect()->back()->with('success','organ Deleted.');
}
}
