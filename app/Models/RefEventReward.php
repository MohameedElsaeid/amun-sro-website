<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefEventReward newModelQuery()
 * @method static Builder<static>|RefEventReward newQuery()
 * @method static Builder<static>|RefEventReward query()
 * @mixin Eloquent
 */
class RefEventReward extends Model
{
    public $timestamps = false;
    protected $table = '_RefEventReward';
    protected $fillable = [
        'Service', 'EventID', 'EventCodeName', 'IsView', 'IsBasicReward', 'IsItemReward', 'IsCheckCondition', 'IsCheckCountry', 'IsCheckClass', 'IsCheckGender', 'Gold', 'Exp', 'SPExp', 'SP', 'Hwan', 'Inventory', 'ItemRewardType', 'SelectionCnt', 'Param1', 'Param1_Desc', 'Param2', 'Param2_Desc', 'Param3', 'Param3_Desc'
    ];

    protected $casts = [
        'Service' => 'integer',
        'EventID' => 'integer',
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
        'Hwan' => 'integer',
        'Inventory' => 'integer',
        'ItemRewardType' => 'integer',
        'SelectionCnt' => 'integer',
        'Param1' => 'integer',
        'Param2' => 'integer',
        'Param3' => 'integer',
    ];
    protected $connection = 'proxy';
}
