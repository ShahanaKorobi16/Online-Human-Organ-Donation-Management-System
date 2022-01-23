<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Organ;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report(Request $request){
        // $addposts=Post::with('organ')->get();
        
        $from = $request->query('from_date');
            $to = $request->query('to_date');
            $addposts = [];
            if($from && $to){
                // dd('ok');

                $addposts=Post::whereBetween('Post_Date',[$from,$to])->get();
               // dd($addposts);
            return view('admin.layouts.post-report',compact('addposts'));
            }
            return view('admin.layouts.post-report',compact('addposts'));
    }



        // dd($addposts);
       
    }

