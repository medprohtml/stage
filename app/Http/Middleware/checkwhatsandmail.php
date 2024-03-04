<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkwhatsandmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(session('testemail')=='default email'){
            return redirect()->route('addmail');
        }
        if(session('testwhatsapp')=='default whatsapp'){
            return redirect()->route('addwhatsapp');
        }
       

            else{
                return $next($request);
            }
        
    }
}
