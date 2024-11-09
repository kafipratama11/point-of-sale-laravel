<?php

namespace App\Livewire;

use App\Models\ProductCategories;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryProductTable extends Component
{

    public $search = '';
    
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        return view('livewire.category-product-table',[
            'categories' => ProductCategories::where('category_name','like','%'.$this->search.'%')->orderBy('id','desc')->paginate(10)
        ]);
    }
}