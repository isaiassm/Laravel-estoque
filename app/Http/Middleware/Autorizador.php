<?php

namespace App\Http\Middleware;

use Closure;

class Autorizador
{
  
    public function handle($request, Closure $next)
    {
        if(!$request->is('login') && \Auth::guest()){
            return redirect ('/login');
        }
        return $next($request);
    }
}
