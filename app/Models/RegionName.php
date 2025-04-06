<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RegionName newModelQuery()
 * @method static Builder<static>|RegionName newQuery()
 * @method static Builder<static>|RegionName query()
 * @mixin Eloquent
 */
class RegionName extends Model
{
    public $timestamps = false;
    protected $table = '_RegionNames';
    protected $fillable = [
        'ID', 'RegionID', 'TownName', 'SafeZone', 'TownNumber'
    ];

    protected $casts = [
        'ID' => 'integer',
        'RegionID' => 'integer',
        'TownNumber' => 'integer',
    ];
    protected $connection = 'log';
}
