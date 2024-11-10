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

class TransactionController extends Controller
{
    public function index() {
        $products = Products::with('category')->get();
        return view('admin.new-transaction', compact('products'));
    }

    public function store(Request $request){
    // Mulai transaksi database untuk menjaga konsistensi data
    DB::beginTransaction();
    $request->validate([
        'total_price' => 'required|numeric|min:1',
        'payment_method' => 'required|string',
    ]);
    
    try {
        // Buat transaksi
        $transaction = Sales::create([
            'transaction_code' => 'TXN-' . time(),
            'total_amount' => $request->total_price,
            'payment_method' => $request->payment_method,
        ]);

        // Buat items yang terkait dengan transaksi
        foreach ($request->items as $item) {
            $transaction->items()->create([
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price_at_sale' => $item['price_at_sale'],
            ]);
        }

        // Commit transaksi jika semuanya berhasil
        DB::commit();

        return response()->json(['message' => 'Transaction and items created successfully'], 200);
    } catch (\Exception $e) {
        // Rollback jika terjadi error
        DB::rollback();

        return response()->json(['message' => 'Error creating transaction and items', 'error' => $e->getMessage()], 500);
    }
}
}