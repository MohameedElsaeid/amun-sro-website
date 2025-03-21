<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefEventRewardItem newModelQuery()
 * @method static Builder<static>|RefEventRewardItem newQuery()
 * @method static Builder<static>|RefEventRewardItem query()
 * @mixin Eloquent
 */
class RefEventRewardItem extends Model
{
    public $timestamps = false;
    protected $table = '_RefEventRewardItems';
    protected $fillable = [
        'Service', 'EventID', 'EventCodeName', 'ItemCodeName', 'PayCount', 'AchieveRatio', 'RentItemCodeName', 'Param1', 'Param1_Desc', 'Param2', 'Param2_Desc'
    ];

    protected $casts = [
        'Service' => 'integer',
        'EventID' => 'integer',
        'PayCount' => 'integer',
        'AchieveRatio' => 'float',
        'Param1' => 'integer',
        'Param2' => 'integer',
    ];
    protected $connection = 'proxy';
}
