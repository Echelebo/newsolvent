<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Session;
use Auth;

class Tfa
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

        if(session()->has('pinkey')){
            return $next($request);
        }elseif(session()->get('pinkey')){
            return redirect()->route('loginpin');
        }
    }
}
