<?php

namespace App\Http\Controllers;
use app\Models\Products;
use App\Models\ProductCategories;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $categories = ProductCategories::all();
        return view('admin.products', compact('categories'));
    }
}