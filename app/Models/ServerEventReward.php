<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServerEventReward newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServerEventReward newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ServerEventReward query()
 * @mixin \Eloquent
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
}
