<?php

namespace App\Http\Middleware;

use Closure;

class Autorizador
{
  
    public function handle($request, Closure $next)
    {
        if(!$request->is('logar') && \Auth::guest()){
            return redirect ('/logar');
        }
        return $next($request);
    }
}
