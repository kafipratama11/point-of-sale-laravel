<?php

namespace App\Livewire;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\PaginationState;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Products;
use App\Models\Sales;
use App\Models\SalesItems;

class TransactionTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'Bootstrap';

    public $search = '';
    public function render()
    {
        // Ambil transaksi berdasarkan pencarian, dengan eager loading 'items' untuk menghindari N+1 query
        $transactions = Sales::where('id', 'like', '%'.$this->search.'%')
                             ->orderBy('id', 'desc')
                             ->paginate(10);

        // Menghitung total qty untuk transaksi yang ditampilkan
        $totalQty = SalesItems::whereIn('sale_id', $transactions->pluck('id'))  // Ambil id transaksi yang ditampilkan
        ->sum('quantity');  // Jumlahkan semua qty dari sales_items yang terkait

        return view('livewire.transaction-table', [
            'transactions' => $transactions,
            'totalQty' => $totalQty,  // Kirimkan total qty ke view
        ]);
    }
}