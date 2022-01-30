<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function kidney()
    {
        return view('website.layouts.Image.kidney');
    }
    public function cornea()
    {
        return view('website.layouts.Image.cornea');
    }
    public function heart()
    {
        return view('website.layouts.Image.heart');
    }

    public function lung()
    {
        return view('website.layouts.Image.lung');
    }
    public function liver()
    {
        return view('website.layouts.Image.liver');
    }
}
