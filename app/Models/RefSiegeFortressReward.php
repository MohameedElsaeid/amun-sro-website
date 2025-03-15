<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSiegeFortressReward newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSiegeFortressReward newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSiegeFortressReward query()
 * @mixin \Eloquent
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
