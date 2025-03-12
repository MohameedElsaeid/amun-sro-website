<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoyalCoinLogHunter extends Model
{
    public $timestamps = false;
    protected $table = 'RoyalCoinLogHunters';
    protected $fillable = [
        'CharID', 'Amount', 'EventTime'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'Amount' => 'integer',
        'EventTime' => 'datetime',
    ];
}
