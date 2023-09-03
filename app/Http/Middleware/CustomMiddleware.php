<?php

namespace App\Http\Middleware;
use \Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   
       
        public function handle($request, Closure $next)
        {
            if (! Auth::check()) {
                return redirect()->intended('dang-nhap');
            }
        
            return $next($request);
        }
    
}
