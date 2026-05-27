<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRol
{
    public function handle($request, Closure $next, $rol)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::usuario()->rol_id !== $rol_id) {
            return redirect('/');
        }

        return $next($request);
    }
}