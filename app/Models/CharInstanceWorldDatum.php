<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|CharInstanceWorldDatum newModelQuery()
 * @method static Builder<static>|CharInstanceWorldDatum newQuery()
 * @method static Builder<static>|CharInstanceWorldDatum query()
 * @mixin Eloquent
 */
class CharInstanceWorldDatum extends Model
{
    public $timestamps = false;
    protected $table = '_CharInstanceWorldData';
    protected $fillable = [
        'CharID', 'DungeonKeyID', 'WorldID', 'LayerID', 'OpenedTime', 'RegionID', 'PosX', 'PosY', 'PosZ', 'IsActivated', 'EnterCount', 'LastEnterTime'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'DungeonKeyID' => 'integer',
        'WorldID' => 'integer',
        'LayerID' => 'integer',
        'OpenedTime' => 'datetime',
        'RegionID' => 'integer',
        'PosX' => 'integer',
        'PosY' => 'integer',
        'PosZ' => 'integer',
        'IsActivated' => 'integer',
        'EnterCount' => 'integer',
        'LastEnterTime' => 'datetime',
    ];
    protected $connection = 'proxy';
}
