<?php

namespace App\Http\Middleware;

use Closure;
use APP\Models\User;

class TypeStudent
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
        if($request->session()->get('role') == '4')
        {
            return $next($request);
        }
        else{
             return redirect("/");
        }

    }
}