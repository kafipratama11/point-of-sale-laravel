<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class AuthController extends Controller
{
    //
    // Proses login
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Mencoba login
        if (Auth::attempt($request->only('email', 'password'))) {
            // Jika login berhasil, arahkan ke halaman dashboard berdasarkan role
            return $this->redirectUser();
        }

        // Jika login gagal, kembalikan ke form login dengan pesan error
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }
    // Fungsi untuk mengarahkan pengguna berdasarkan role
    protected function redirectUser()
    {
        $user = Auth::user();

        // Arahkan ke halaman dashboard sesuai role
        // superadmin
        if ($user->role_id === 1) {
            return view('admin.index'); // Ubah sesuai rute admin
        } 
        // admin
        else if($user->role_id === 2){
            return view('admin.index'); // Ubah sesuai rute user
        } 
        // cashier
        else if($user->role_id === 3){
            return view('admin.index'); // Ubah sesuai rute user
        }
        else {
            // Handle jika role tidak dikenali
            abort(403, 'Unauthorized');
        }
    }
    
    // Proses logout
    public function logout(Request $request)
    {
        Auth::logout();

        // Menghapus sesi jika ada
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Anda telah berhasil logout.');
    }

}