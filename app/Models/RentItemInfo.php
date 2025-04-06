<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RentItemInfo newModelQuery()
 * @method static Builder<static>|RentItemInfo newQuery()
 * @method static Builder<static>|RentItemInfo query()
 * @mixin Eloquent
 */
class RentItemInfo extends Model
{
    public $timestamps = false;
    protected $table = '_RentItemInfo';
    protected $fillable = [
        'nItemDBID', 'nRentType', 'nCanDelete', 'nCanRecharge', 'PeriodBeginTime', 'PeriodEndTime', 'MeterRateTime', 'nPackingState', 'nPackingTime'
    ];

    protected $casts = [
        'nItemDBID' => 'integer',
        'nRentType' => 'integer',
        'nCanDelete' => 'integer',
        'nCanRecharge' => 'integer',
        'PeriodBeginTime' => 'datetime',
        'PeriodEndTime' => 'datetime',
        'MeterRateTime' => 'datetime',
        'nPackingState' => 'integer',
        'nPackingTime' => 'integer',
    ];
    protected $connection = 'proxy';
}
