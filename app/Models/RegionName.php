<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RegionName newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RegionName newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RegionName query()
 * @mixin \Eloquent
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
