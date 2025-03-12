<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefServerEventRewardSpawnMonster extends Model
{
    public $timestamps = false;
    protected $table = '_RefServerEventReward_SpawnMonster';
    protected $fillable = [
        'OwnerRewardID', 'RegionID', 'PosX', 'PosY', 'PosZ'
    ];

    protected $casts = [
        'OwnerRewardID' => 'integer',
        'RegionID' => 'integer',
        'PosX' => 'float',
        'PosY' => 'float',
        'PosZ' => 'float',
    ];
}
