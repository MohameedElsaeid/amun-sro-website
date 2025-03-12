        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefSiegeQuestReward extends Model
        {
            protected $table = '_RefSiegeQuestReward';
            public $timestamps = false;

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
        }