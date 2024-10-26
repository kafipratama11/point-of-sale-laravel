<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Mengambil semua data produk dari model
        // Mengembalikan data ke view (contoh: produk/index)
        return view('admin.index');
    }
}