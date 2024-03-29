<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
       // dd((auth()->user()->role=='admin'));
        if(auth()->user()->role=='admin'){
            return $next($request);
        }
        else
        {
            //dd("hi");
            return redirect()->route('website.home')->with('error','Permission denied.');
        }
    }
}
