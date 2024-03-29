<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{

    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        if(!$user->isAdmin()){
            return redirect('/home');
        }
    
        return $next($request);
    }
}
