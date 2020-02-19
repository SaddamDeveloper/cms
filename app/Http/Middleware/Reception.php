<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Reception
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
        if(!Auth::check()){
            return redirect()->route('login');
        }

        if(Auth::user()->role == 1){
            return $next($request);
        }

        $destinations = [
            1 => 'reception',
            2 => 'admin',
            4 => 'employee'
        ];

        return redirect(route($destination[Auth::user()->role]));
    }
}
