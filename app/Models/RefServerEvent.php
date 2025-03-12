<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefServerEvent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefServerEvent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefServerEvent query()
 * @mixin \Eloquent
 */
class RefServerEvent extends Model
{
    public $timestamps = false;
    protected $table = '_RefServerEvent';
    protected $fillable = [
        'Service', 'ID', 'DetectingTargetType', 'DetectingTargetID', 'Name', 'BeginDate', 'EndDate', 'NotificationTypeDetectingTarget', 'AchievementConditionType', 'AchievementConditionLevel', 'AchievementCondition', 'RewardTarget', 'GiveRewardDelayTime', 'ActivateClientUI'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'DetectingTargetType' => 'integer',
        'DetectingTargetID' => 'integer',
        'BeginDate' => 'datetime',
        'EndDate' => 'datetime',
        'NotificationTypeDetectingTarget' => 'integer',
        'AchievementConditionType' => 'integer',
        'AchievementConditionLevel' => 'integer',
        'AchievementCondition' => 'integer',
        'RewardTarget' => 'integer',
        'GiveRewardDelayTime' => 'integer',
        'ActivateClientUI' => 'integer',
    ];
}
