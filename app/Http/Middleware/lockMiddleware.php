<?php

namespace App\Http\Middleware;

use Closure;

class lockMiddleware{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){
        // var_export('expression');
        // exit();

        return $next($request);
    }
}
