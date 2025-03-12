<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InventoryForLinkedStorage extends Model
{
    public $timestamps = false;
    protected $table = '_InventoryForLinkedStorage';
    protected $fillable = [
        'LinkedItemID', 'Slot', 'ItemID'
    ];

    protected $casts = [
        'LinkedItemID' => 'integer',
        'Slot' => 'integer',
        'ItemID' => 'integer',
    ];
}
