<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class AdminMiddleware
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
        if (Sentinel::check() && Sentinel::getUser()->roles->first()->name == 'Admin') {
            return $next($request);
            // foreach($roles as $role) {
            //     if($role->name == 'Admin'){
            //         return $next($request);
            //     }
            // }
            // return redirect('/');

        }else {
            return redirect('/');
        }
        
    }
}
