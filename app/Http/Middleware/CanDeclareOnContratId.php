<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class CanDeclareOnContratId
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        foreach(Auth::user()->contrats as $contrat) 
        {
            if($contrat->id == $request->id)
            {
                return $next($request);
            }
        }
        return redirect('/', 301);
    }
}
