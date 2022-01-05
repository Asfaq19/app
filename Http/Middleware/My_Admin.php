<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class My_Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if($user->functionName_My_Admin()){
            return $next($request);
        } else {
            return back();
        }
        
    
        // if(!$user){
        //     return view('not_admin');
        // } else if($user->functionName_My_Admin()){
        //     return view('my_admin');
        // } else {
        // }
        
    }
}
