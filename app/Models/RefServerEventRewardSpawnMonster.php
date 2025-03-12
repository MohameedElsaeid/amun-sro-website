<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefServerEventRewardSpawnMonster newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefServerEventRewardSpawnMonster newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefServerEventRewardSpawnMonster query()
 * @mixin \Eloquent
 */
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
