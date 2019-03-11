<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $guard='admin';
    public function handle($request, Closure $next)
    {
        echo "Dsfsdf";
       

        //return $next($request);
    }
}
