<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InventoryForAvatar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InventoryForAvatar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|InventoryForAvatar query()
 * @mixin \Eloquent
 */
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
