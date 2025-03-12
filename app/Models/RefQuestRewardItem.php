        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefQuestRewardItem extends Model
        {
            protected $table = '_RefQuestRewardItems';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'QuestID', 'QuestCodeName', 'RewardType', 'ItemCodeName', 'OptionalItemCode', 'OptionalItemCnt', 'AchieveQuantity', 'RentItemCodeName', 'Param1', 'Param1_Desc', 'Param2', 'Param2_Desc'
            ];

            protected $casts = [
                'Service' => 'integer',
        'QuestID' => 'integer',
        'RewardType' => 'integer',
        'OptionalItemCnt' => 'integer',
        'AchieveQuantity' => 'integer',
        'Param1' => 'integer',
        'Param2' => 'integer',
    ];
        }