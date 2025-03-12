<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StallItemBuyer extends Model
{
    public $timestamps = false;
    protected $table = 'StallItemBuyers';
    protected $fillable = [
        'ID', 'BuyerName', 'StallSlot', 'Date'
    ];

    protected $casts = [
        'ID' => 'integer',
        'StallSlot' => 'integer',
    ];
}
