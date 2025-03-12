<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharQuest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharQuest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharQuest query()
 * @mixin \Eloquent
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
}
