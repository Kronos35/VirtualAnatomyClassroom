<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckWriterRole
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
        // Checking if authenticated user is Admin or writer
        $roles = (Auth::user())->getRoleNames();
        foreach ($roles as $role) {
            if ($role == 'writer') {
                return redirect('home');
            }
        }

        return $next($request);
    }
}
