<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesItems extends Model
{
    use HasFactory;
    protected $fillable = ['transaction_id', 'product_id', 'price_at_sale', 'quantity'];

    public function transaction()
    {
        return $this->belongsTo(Sales::class);
    }
}