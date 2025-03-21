<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefSiegeFortressReward newModelQuery()
 * @method static Builder<static>|RefSiegeFortressReward newQuery()
 * @method static Builder<static>|RefSiegeFortressReward query()
 * @mixin Eloquent
 */
class RefSiegeFortressReward extends Model
{
    public $timestamps = false;
    protected $table = '_RefSiegeFortressRewards';
    protected $fillable = [
        'Service', 'FortressID', 'RewardTypeID', 'RewardValue', 'RewardCount'
    ];

    protected $casts = [
        'Service' => 'integer',
        'FortressID' => 'integer',
        'RewardTypeID' => 'integer',
        'RewardValue' => 'integer',
        'RewardCount' => 'integer',
    ];
    protected $connection = 'proxy';
}
