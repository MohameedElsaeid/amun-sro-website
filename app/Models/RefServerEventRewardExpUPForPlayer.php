<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
