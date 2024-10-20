<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaction extends Model
{
    protected $fillable = ['customer_id', 'amount', 'type']; // type could be 'credit' or 'debit'


    public function customer()
    {
        return $this->belongsTo(Customer::class);
    
    }

    public function types():HasMany

    {
        return $this->hasMany(TransactionType::class);
    }
}
