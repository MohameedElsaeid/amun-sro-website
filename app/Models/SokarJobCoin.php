<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SokarJobCoin extends Model
{
    public $timestamps = false;
    protected $table = 'SokarJobCoin';
    protected $fillable = [
        'CharID', 'Amount', 'EventTime'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'Amount' => 'integer',
        'EventTime' => 'datetime',
    ];
}
