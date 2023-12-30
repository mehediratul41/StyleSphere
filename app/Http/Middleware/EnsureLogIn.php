<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class EnsureLogIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // dd($request);
        // return redirect()->back();
        // $ses = Auth::check();
        // dd($ses);
        if(!Auth::check())
        {
            // return view('auth.login');
            // return redirect()->route('login');
            return redirect('/login');
        } 
        // dd(Auth::user());
        // $user_id = request()->session()->get('user_id');
        // dd($user_id);
        return $next($request);
        
    }
}
