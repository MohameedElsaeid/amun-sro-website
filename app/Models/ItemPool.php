<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|ItemPool newModelQuery()
 * @method static Builder<static>|ItemPool newQuery()
 * @method static Builder<static>|ItemPool query()
 * @mixin Eloquent
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
