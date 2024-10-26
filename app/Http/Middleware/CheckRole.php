<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRoles
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();

        // Cek apakah user tidak terautentikasi
        if (!$user) {
            return redirect('/'); // Atau ke halaman yang sesuai
        }

        // Memeriksa apakah role_id adalah 1 atau 2
        if ($user->role_id === 1 || $user->role_id === 2) {
            return $next($request); // Izinkan akses
        }

        // Jika role_id adalah 3, redirect atau abort
        return redirect('/'); // Ganti dengan URL atau tindakan yang diinginkan
    }
}