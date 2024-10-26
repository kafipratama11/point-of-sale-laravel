<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Ambil user yang sedang login
        $user = Auth::user();

        // Periksa apakah user memiliki role yang sesuai
        if (!$user || !in_array($user->role->role_name, $roles)) {
            return redirect('/'); // Redirect atau kirim pesan error
        }

        return $next($request);
    }
}