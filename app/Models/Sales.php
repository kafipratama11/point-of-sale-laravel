<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $fillable = ['transaction_code', 'total_amount', 'discount', 'payment_method'];

    public function items()
    {
        return $this->hasMany(SalesItems::class);
    }
}