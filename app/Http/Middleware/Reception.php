<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Reception
{

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
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
