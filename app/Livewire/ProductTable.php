<?php
namespace App\Livewire;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\PaginationState;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Products;

class ProductTable extends Component
{
    use WithPagination;
    protected $paginationTheme = 'Bootstrap';

    public $search = '';
    
    public function render()
    {
        
        return view('livewire.product-table', [
            'products' => Products::where('product_name','like','%'.$this->search.'%')->orderBy('id','desc')->paginate(10)
        ]);
    }
}