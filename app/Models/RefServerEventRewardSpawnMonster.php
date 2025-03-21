<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefServerEventRewardSpawnMonster newModelQuery()
 * @method static Builder<static>|RefServerEventRewardSpawnMonster newQuery()
 * @method static Builder<static>|RefServerEventRewardSpawnMonster query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
