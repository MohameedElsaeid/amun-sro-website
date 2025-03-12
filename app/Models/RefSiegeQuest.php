<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSiegeQuest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSiegeQuest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSiegeQuest query()
 * @mixin \Eloquent
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
}
