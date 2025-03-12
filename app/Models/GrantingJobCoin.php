<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GrantingJobCoin extends Model
{
    public $timestamps = false;
    protected $table = 'GrantingJobCoin';
    protected $fillable = [
        'CharID', 'Amount', 'EventTime'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'Amount' => 'integer',
        'EventTime' => 'datetime',
    ];
}
