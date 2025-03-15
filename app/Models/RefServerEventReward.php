<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefServerEventReward newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefServerEventReward newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefServerEventReward query()
 * @mixin \Eloquent
 */
class RefServerEventReward extends Model
{
    public $timestamps = false;
    protected $table = '_RefServerEventReward';
    protected $fillable = [
        'Service', 'RewardID', 'OwnerServerEventID', 'RefRewardID', 'Quantity', 'RewardClass', 'MasterReward'
    ];

    protected $casts = [
        'Service' => 'integer',
        'RewardID' => 'integer',
        'OwnerServerEventID' => 'integer',
        'RefRewardID' => 'integer',
        'Quantity' => 'integer',
        'RewardClass' => 'integer',
        'MasterReward' => 'integer',
    ];
    protected $connection = 'proxy';
}
