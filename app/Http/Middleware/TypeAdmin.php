<?php

namespace App\Http\Middleware;

use Closure;
use APP\Models\User;

class TypeAdmin
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
        if($request->session()->get('role') == '1')
        {
            return $next($request);
        }
        else{
             return redirect("/");
        }

    }
}