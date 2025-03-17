<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefEventRewardItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefEventRewardItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefEventRewardItem query()
 * @mixin \Eloquent
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
