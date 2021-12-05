<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        $addposts=Post::all();
        //dd($addposts);  
        return view('website.index',compact('addposts'));
 
    }
   
}

