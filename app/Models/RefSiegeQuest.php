        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefSiegeQuest extends Model
        {
            protected $table = '_RefSiegeQuest';
            public $timestamps = false;

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