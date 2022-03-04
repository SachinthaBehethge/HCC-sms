<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next,$guard = null){
        if (Auth::guard($guard)->check()) {
        $user = Auth::user();

        // dd($user->role_id);
        if($user->role_id == 1){
           
        return $next($request);
        } else{
            // abort(403, 'Wrong Accept Header');
            return   redirect('/');
        }
    }
    }
}