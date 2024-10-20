<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TransactionType extends Model
{
    protected $fillable = ['type'];


    public function transactions():BelongsTo
{

  return $this->belongsTo(Transaction::class);
}
}
