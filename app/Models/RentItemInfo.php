        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RentItemInfo extends Model
        {
            protected $table = '_RentItemInfo';
            public $timestamps = false;

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