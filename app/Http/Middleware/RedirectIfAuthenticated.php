<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\ElseIf_;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next,$guard = null){
        if (Auth::guard($guard)->check()) {
        $user = Auth::user();

        // dd($user->role_id);
        if($user->role_id == 1){
            return redirect('/admin');
               
        }else{
            return redirect('/');
        }
     }
    return $next($request);
    }
}

