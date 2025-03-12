<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryForAvatar extends Model
{
    public $timestamps = false;
    protected $table = '_InventoryForAvatar';
    protected $fillable = [
        'CharID', 'Slot', 'ItemID'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'Slot' => 'integer',
        'ItemID' => 'integer',
    ];
}
