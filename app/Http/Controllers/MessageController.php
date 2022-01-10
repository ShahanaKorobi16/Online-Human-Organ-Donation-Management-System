<?php

namespace App\Http\Controllers;

use App\Models\Donorpost;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function postMessage(){
        $adpost=Donorpost::all();
        //dd($adpost);
        return view('admin.layouts.post-message',compact('adpost'));
    }

    public function viewComment($id){
        // dd($id);
        $donorPosts = Donorpost::find($id);
     //dd($donorPosts);
        return view('admin.layouts.post-message',compact('donorPosts'));
    }
}
