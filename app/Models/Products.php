<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';

    protected $fillable = [
        'name',
        'category_id',
        'price',
        'stock',
        'description',
        'sku'
    ];
    
    public function category()
    {
        return $this->belongsTo(ProductCategories::class, 'category_id');
    }
}