<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvCO extends Model
{
    public $timestamps = false;
    protected $table = '_InvCOS';
    protected $fillable = [
        'COSID', 'Slot', 'ItemID'
    ];

    protected $casts = [
        'COSID' => 'integer',
        'Slot' => 'integer',
        'ItemID' => 'integer',
    ];
}
