<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\Auth;

class CheckAdminRole
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
        // Checking if authenticated user is Admin
        $roles = (Auth::user())->getRoleNames();
        foreach ($roles as $role) {
            if ($role == 'Admin') {
                return redirect('home');
            }
        }
        
        return $next($request);
    }
}
