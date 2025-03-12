<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
