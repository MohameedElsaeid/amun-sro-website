<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSiegeQuestReward newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSiegeQuestReward newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSiegeQuestReward query()
 * @mixin \Eloquent
 */
class RefSiegeQuestReward extends Model
{
    public $timestamps = false;
    protected $table = '_RefSiegeQuestReward';
    protected $fillable = [
        'Service', 'QuestID', 'RewardType', 'RewardRefID', 'RewardValue'
    ];

    protected $casts = [
        'Service' => 'integer',
        'QuestID' => 'integer',
        'RewardType' => 'integer',
        'RewardRefID' => 'integer',
        'RewardValue' => 'integer',
    ];
    protected $connection = 'proxy';
}
