<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefQuestRewardItem newModelQuery()
 * @method static Builder<static>|RefQuestRewardItem newQuery()
 * @method static Builder<static>|RefQuestRewardItem query()
 * @mixin Eloquent
 */
class RefQuestRewardItem extends Model
{
    public $timestamps = false;
    protected $table = '_RefQuestRewardItems';
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
    protected $connection = 'proxy';
}
