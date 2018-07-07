<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckWritePermission
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
        $user = Auth::user();
        if (!$user->can('create articles')) {
            return redirect('home');
        }
        return $next($request);
    }
}
