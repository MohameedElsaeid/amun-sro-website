<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|InventoryForAvatar newModelQuery()
 * @method static Builder<static>|InventoryForAvatar newQuery()
 * @method static Builder<static>|InventoryForAvatar query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
