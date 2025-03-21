<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefSiegeQuest newModelQuery()
 * @method static Builder<static>|RefSiegeQuest newQuery()
 * @method static Builder<static>|RefSiegeQuest query()
 * @mixin Eloquent
 */
class RefSiegeQuest extends Model
{
    public $timestamps = false;
    protected $table = '_RefSiegeQuest';
    protected $fillable = [
        'Service', 'QuestID', 'QuestName', 'QuestType', 'RewardConditionTargetCount', 'IsAccumulation'
    ];

    protected $casts = [
        'Service' => 'integer',
        'QuestID' => 'integer',
        'QuestType' => 'integer',
        'RewardConditionTargetCount' => 'integer',
        'IsAccumulation' => 'integer',
    ];
    protected $connection = 'proxy';
}
