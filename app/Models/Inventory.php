<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    public $timestamps = false;
    protected $table = '_Inventory';
    protected $fillable = [
        'CharID', 'Slot', 'ItemID'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'Slot' => 'integer',
        'ItemID' => 'integer',
    ];
}
