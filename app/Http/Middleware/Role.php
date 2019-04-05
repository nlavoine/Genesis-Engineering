<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class Role {
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, $roles) {


        $roles = explode("|", $roles);
        $user = Auth::user();

        //Compare les roles passés en param du middleware avec le role du user
        foreach ($roles as $role) {
            if ($user->hasRole()->label == $role) {
                return $next($request);
            }
        }

        //Si pas le bon role, redirection
        return redirect('home.forbidden');
    }
}
