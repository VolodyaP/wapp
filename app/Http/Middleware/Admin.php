<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        $user_roles = $request->user()->roles->values();
        $admin_role = false;

        foreach($user_roles as $role){
            if($role->role == 'admin')
                $admin_role = $role->role;
        }

        if(!$admin_role){
            return redirect('/');
        }

        return $next($request);
    }
}
