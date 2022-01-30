<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Organ;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report(Request $request){
        $addposts = [];
        if($request->has('from_date'))
        {
          $request->validate([
            'from_date' => 'required',
            'to_date' => 'required|date|after_or_equal:from_date',
        ]);
        // $addposts=Post::with('organ')->get();
        
        $from = $request->query('from_date');
            $to = $request->query('to_date');
            $addposts = [];
            if($from && $to){
                // dd('ok');

                $addposts=Post::whereBetween('Post_Date',[$from,$to])->get();
               // dd($addposts);
            return view('admin.layouts.post-report',compact('addposts'))->with('error','Please select a validate date');
            }
            return view('admin.layouts.post-report',compact('addposts'))->with('error','Please select a validate date');
    }
             return view('admin.layouts.post-report',compact('addposts'));
    }
    public function dreport(Request $request){
        $adposts = [];
        if($request->has('from_date'))
        {
          $request->validate([
            'from_date' => 'required',
            'to_date' => 'required|date|after_or_equal:from_date',
        ]);
        // $addposts=Post::with('organ')->get();
        
        $from = $request->query('from_date');
            $to = $request->query('to_date');
            $adposts = [];
            if($from && $to){
                // dd('ok');

                $adposts=Post::whereBetween('Post_Date',[$from,$to])->get();
               // dd($addposts);
            return view('admin.layouts.donor-post-report',compact('adposts'))->with('error','Please select a validate date');
            }
            return view('admin.layouts.donor-post-report',compact('adposts'))->with('error','Please select a validate date');
    }

    return view('admin.layouts.donor-post-report',compact('adposts'));
        // dd($addposts);
       
    }

}