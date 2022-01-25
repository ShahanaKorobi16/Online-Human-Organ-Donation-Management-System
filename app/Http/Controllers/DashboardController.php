<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use App\Models\Organ;
use App\Models\Donorpost;
use App\Models\Message;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
        public function dashboard(){


            // public function dashboard(){

                $count['users']=User::all()->count();
                $count['organs']=Organ::all()->count();
                $count['posts']=Post::all()->count();
                $count['donorposts']=Donorpost::all()->count();
                $count['messages']=Message::all()->count();
                
        
        
        
        
                return view('admin.layouts.dashboard',compact('count'));
         
            }

        }