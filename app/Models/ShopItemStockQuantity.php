        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class ShopItemStockQuantity extends Model
        {
            protected $table = '_ShopItemStockQuantity';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'Country', 'RefShopGroupCodeName', 'RefPackageItemCodeName', 'ConstStockQuantity', 'StockQuantity'
            ];

            protected $casts = [
                'Service' => 'integer',
        'Country' => 'integer',
        'ConstStockQuantity' => 'integer',
        'StockQuantity' => 'integer',
    ];
        }