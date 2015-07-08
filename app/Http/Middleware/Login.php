<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class Login
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
        if(!Session::has('credentials')):
            return redirect('login');
        endif;

        return $next($request);
    }
}
