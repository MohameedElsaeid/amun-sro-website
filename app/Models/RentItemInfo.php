<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
