<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\ProductCategories;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Sales;
use App\Models\SalesItems;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RequestController extends Controller
{
    public function index(){
        return view('admin.purchase-request');
    }
}