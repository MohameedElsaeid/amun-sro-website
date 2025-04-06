<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|CharQuest newModelQuery()
 * @method static Builder<static>|CharQuest newQuery()
 * @method static Builder<static>|CharQuest query()
 * @mixin Eloquent
 */
class CharQuest extends Model
{
    public $timestamps = false;
    protected $table = '_CharQuest';
    protected $fillable = [
        'CharID', 'QuestID', 'Status', 'AchievementCount', 'StartTime', 'EndTime', 'QuestData1', 'QuestData2'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'QuestID' => 'integer',
        'Status' => 'integer',
        'AchievementCount' => 'integer',
        'StartTime' => 'datetime',
        'EndTime' => 'datetime',
        'QuestData1' => 'integer',
        'QuestData2' => 'integer',
    ];
    protected $connection = 'proxy';
}
