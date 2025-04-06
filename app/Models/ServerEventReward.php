<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|ServerEventReward newModelQuery()
 * @method static Builder<static>|ServerEventReward newQuery()
 * @method static Builder<static>|ServerEventReward query()
 * @mixin Eloquent
 */
class ServerEventReward extends Model
{
    public $timestamps = false;
    protected $table = '_ServerEventReward';
    protected $fillable = [
        'ServerEventID', 'RewardID', 'RemainRewardTime'
    ];

    protected $casts = [
        'ServerEventID' => 'integer',
        'RewardID' => 'integer',
        'RemainRewardTime' => 'integer',
    ];
    protected $connection = 'proxy';
}
