<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ItemPool newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ItemPool newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ItemPool query()
 * @mixin \Eloquent
 */
class ItemPool extends Model
{
    public $timestamps = false;
    protected $table = '_ItemPool';
    protected $fillable = [
        'ItemID', 'InUse'
    ];

    protected $casts = [
        'ItemID' => 'integer',
        'InUse' => 'integer',
    ];
    protected $connection = 'proxy';
}
