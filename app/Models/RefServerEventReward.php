<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefServerEventReward newModelQuery()
 * @method static Builder<static>|RefServerEventReward newQuery()
 * @method static Builder<static>|RefServerEventReward query()
 * @mixin Eloquent
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
