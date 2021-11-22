<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonorController extends Controller
{
    public function donor(){
        return view('admin.layouts.donor');
    }
}
