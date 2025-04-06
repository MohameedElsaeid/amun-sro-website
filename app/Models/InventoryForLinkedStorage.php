<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|InventoryForLinkedStorage newModelQuery()
 * @method static Builder<static>|InventoryForLinkedStorage newQuery()
 * @method static Builder<static>|InventoryForLinkedStorage query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
