<?php

namespace App\Http\Controllers\website;
use App\Models\Donor;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function reg(){
        return view('website.layouts.patient-reg');

    
    }
}
