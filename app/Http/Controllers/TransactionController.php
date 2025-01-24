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

class TransactionController extends Controller
{
    public function index() {
        $products = Products::with('category')->get();
        $today = Carbon::now()->locale('id'); // Mengatur locale ke bahasa Indonesia
        $formattedToday = $today->translatedFormat('l, d F Y');
        return view('admin.new-transaction', compact('products', 'formattedToday'));
    }

    public function store(Request $request){
        $data = $request->all();
        $month = date('m');
        $year = date('y');

        $transactionCode = DB::transaction(function () use ($month, $year) {
            $counter = DB::table('transaction_counters')->lockForUpdate()->first();
            if (!$counter || $counter->month !== $month || $counter->year !== $year) {
                $nextNumber = 1;
                DB::table('transaction_counters')->updateOrInsert(
                [],
                ['last_number' => $nextNumber, 'month' => $month, 'year' => $year]
            );
            } else {
                $nextNumber = $counter->last_number + 1;
                DB::table('transaction_counters')->update([
                'last_number' => $nextNumber,
                ]);
            }
            return 'TXN-' . $month . $year . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);
        });

        $transaction = new Sales();
        $transaction->transaction_code = $transactionCode;
        $transaction->total_price = $data['total_price'];
        $transaction->payment_method = $data['payment_method'];
        $transaction->save();

        if (count($data['product_id']) > 0) {
            foreach ($data['product_id'] as $item => $value) {
                $data2 = [
                    'sale_id' => $transaction->id,
                    'product_id' => $data['product_id'][$item],
                    'quantity' => $data['quantity'][$item],
                    'price_at_sale' => $data['price_at_sale'][$item],
                ];
            SalesItems::create($data2);
            }
        }
        return redirect()->back()->with('success', 'Data berhasil dibuat');
    }

    public function history(Request $request){
        $transactions = Sales::all();
        return view('admin.transaction', compact('transactions'));
    }

    public function show($encryptedId){
        $id = decrypt($encryptedId);
        $transaction = Sales::findOrFail($id);
        $items = SalesItems::with('product')->where('sale_id', $id)->get();

        return view('admin.show-transaction', compact('transaction', 'items'));
    }

    public function destroy($encryptedId){
        $id = decrypt($encryptedId);
        $transaction = Sales::findOrFail($id);
        SalesItems::where('sale_id', $id)->delete();
        Sales::where('id', $id)->delete();
        
        return redirect()->route('transaction.history')->with('success', 'Transaction deleted successfully.');
    }

    public function delete_checkbox(Request $request){
        // Validasi input
        $request->validate([
            'ids' => 'required|array',  // Pastikan ada array id yang dikirim
            'ids.*' => 'integer',      // Pastikan setiap item adalah integer
        ]);

        // Hapus data berdasarkan ID yang dipilih
        Sales::whereIn('id', $request->ids)->delete();

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}