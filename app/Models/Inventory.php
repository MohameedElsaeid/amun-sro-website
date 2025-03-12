<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inventory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inventory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Inventory query()
 * @mixin \Eloquent
 */
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
