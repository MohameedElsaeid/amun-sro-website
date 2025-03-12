        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefServerEvent extends Model
        {
            protected $table = '_RefServerEvent';
            public $timestamps = false;

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