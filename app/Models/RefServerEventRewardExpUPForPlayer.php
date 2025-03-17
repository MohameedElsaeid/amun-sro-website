<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefServerEventRewardExpUPForPlayer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefServerEventRewardExpUPForPlayer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefServerEventRewardExpUPForPlayer query()
 * @mixin \Eloquent
 */
class RefServerEventRewardExpUPForPlayer extends Model
{
    public $timestamps = false;
    protected $table = '_RefServerEventReward_ExpUPForPlayers';
    protected $fillable = [
        'OwnerRewardID', 'ApplyTime', 'ApplyExpRatio', 'ApplySExpRatio'
    ];

    protected $casts = [
        'OwnerRewardID' => 'integer',
        'ApplyTime' => 'integer',
        'ApplyExpRatio' => 'integer',
        'ApplySExpRatio' => 'integer',
    ];
    protected $connection = 'proxy';
}
