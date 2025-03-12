        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefQuestReward extends Model
        {
            protected $table = '_RefQuestReward';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'QuestID', 'QuestCodeName', 'IsView', 'IsBasicReward', 'IsItemReward', 'IsCheckCondition', 'IsCheckCountry', 'IsCheckClass', 'IsCheckGender', 'Gold', 'Exp', 'SPExp', 'SP', 'AP', 'APType', 'Hwan', 'Inventory', 'ItemRewardType', 'SelectionCnt', 'Param1', 'Param1_Desc', 'Param2', 'Param2_Desc', 'Param3', 'Param3_Desc'
            ];

            protected $casts = [
                'Service' => 'integer',
        'QuestID' => 'integer',
        'IsView' => 'integer',
        'IsBasicReward' => 'integer',
        'IsItemReward' => 'integer',
        'IsCheckCondition' => 'integer',
        'IsCheckCountry' => 'integer',
        'IsCheckClass' => 'integer',
        'IsCheckGender' => 'integer',
        'Gold' => 'integer',
        'Exp' => 'integer',
        'SPExp' => 'integer',
        'SP' => 'integer',
        'AP' => 'integer',
        'Hwan' => 'integer',
        'Inventory' => 'integer',
        'ItemRewardType' => 'integer',
        'SelectionCnt' => 'integer',
        'Param1' => 'integer',
        'Param2' => 'integer',
        'Param3' => 'integer',
    ];
        }