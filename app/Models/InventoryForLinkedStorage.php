<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InventoryForLinkedStorage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InventoryForLinkedStorage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InventoryForLinkedStorage query()
 * @mixin \Eloquent
 */
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
