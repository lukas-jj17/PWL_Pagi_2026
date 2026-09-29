<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'barcode_number',
        'barcode_name',
        'buy_price',
        'sell_price',
    ];

    protected $table = 'products';

    public $timestamps = true;

    PUBLIC function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }
}