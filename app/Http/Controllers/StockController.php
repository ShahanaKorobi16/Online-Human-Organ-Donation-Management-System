<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Organ;

class StockController extends Controller
{
    public function stock(){
        $stocks= Stock::with('organ')->get();
        //dd($stocks);
        return view('admin.layouts.stock',compact('stocks'));
}
public function addstock(){
   
    $organs=Organ::all();
    // dd($organs);
     return view('admin.layouts.addstock',compact('organs'));
    
}
public function add(Request $request){
    // dd($request->all());
      $request->validate([
        'Quantity'=>'required'|numeric,

      ]);
       Stock::create([
           'Quantity'=> $request->Quantity,
           'organ_id'=> $request->organ_id
           

       ]);
       return redirect()->back()->with('msg','Added to stock successfully.');
    

  
 }





    


       
   
}