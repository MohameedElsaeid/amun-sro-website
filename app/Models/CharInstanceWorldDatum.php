<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
