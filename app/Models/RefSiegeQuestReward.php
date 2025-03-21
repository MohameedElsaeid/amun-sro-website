<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefSiegeQuestReward newModelQuery()
 * @method static Builder<static>|RefSiegeQuestReward newQuery()
 * @method static Builder<static>|RefSiegeQuestReward query()
 * @mixin Eloquent
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
