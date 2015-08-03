<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ActiveUser
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

        #if user is logged in
        if (Auth::check())
        {

            if($request->user()->active != 1){
                return redirect('/user/notactive');
            }

            return $next($request);
        }

        return view('app');

    }
}
