<?php

namespace App\Models;

class SilkHourConfig extends Model
{
    public $timestamps = false;
    protected $table = '_Silk/Hour-Config';
    protected $fillable = [
        'Desc', 'DefaultSilk', 'Step1Silk', 'Step2Silk', 'Step3Silk', 'RewardSilk', 'WEEKDAYS'
    ];

    protected $casts = [
        'DefaultSilk' => 'integer',
        'Step1Silk' => 'integer',
        'Step2Silk' => 'integer',
        'Step3Silk' => 'integer',
        'RewardSilk' => 'integer',
    ];
    protected $connection = 'log';
}
