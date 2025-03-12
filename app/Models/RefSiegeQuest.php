<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
