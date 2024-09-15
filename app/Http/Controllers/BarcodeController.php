<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarcodeController extends Controller
{
    public function generateBarcode()
    {
        $sku = ["KNG-SL-001"];

        return view('admin.products', compact('sku'));
    }
}