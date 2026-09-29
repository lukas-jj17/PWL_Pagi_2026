<?php

namespace App\Models;

use Illuminate\Database\Eloquent\model;

class transaction extends model
{
    protected $fillable = [
        'invoice_number',
        'supplier_id',
        'transaction_type',
        'subtotal',
    ];

    protected $table = 'Transactions';

    public $timestamps = true;

    public function TransactionDetails()
    {
        return $this->hasMany(Transaction_Detail::class, 'transaction_id', 'id');
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }



}