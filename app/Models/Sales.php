<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $fillable = ['transaction_code', 'total_price', 'discount', 'payment_method'];

    public function items()
    {
        return $this->hasMany(SalesItems::class, 'sale_id');
    }

    
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($transaction) {
            $transaction->items()->delete(); // Hapus transaksi item terkait
        });
    }
}