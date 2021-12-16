<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonorRegController extends Controller
{
    public function reg(){
        return view('website.layouts.patient-reg');
}
}