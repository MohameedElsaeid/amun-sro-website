        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefShopItemStockPeriod extends Model
        {
            protected $table = '_RefShopItemStockPeriod';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'Country', 'ID', 'RefShopGroupCodeName', 'RefPackageItemCodeName', 'StockOpeningDate', 'StockExpireDate', 'PeriodDevice'
            ];

            protected $casts = [
                'Service' => 'integer',
        'Country' => 'integer',
        'ID' => 'integer',
        'StockOpeningDate' => 'datetime',
        'StockExpireDate' => 'datetime',
        'PeriodDevice' => 'integer',
    ];
        }