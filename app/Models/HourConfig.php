<?php

namespace App\Models;

class Silk/HourConfig extends Model
        {
            protected
            $table = '_Silk/Hour-Config';
            public
            $timestamps = false;

            protected
            $fillable = [
                'Desc', 'DefaultSilk', 'Step1Silk', 'Step2Silk', 'Step3Silk', 'RewardSilk', 'WEEKDAYS'
            ];

            protected
            $casts = [
                'DefaultSilk' => 'integer',
                'Step1Silk' => 'integer',
                'Step2Silk' => 'integer',
                'Step3Silk' => 'integer',
                'RewardSilk' => 'integer',
            ];
            protected $connection = 'log';
}
