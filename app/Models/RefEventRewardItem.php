<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
