        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SKPackageItemSaleLog extends Model
        {
            protected $table = 'SK_PackageItemSaleLog';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'JID', 'ShardID', 'CharID', 'PackageItemID', 'Silk_Own', 'Silk_Gift', 'Silk_Point', 'IP', 'RegDate'
            ];

            protected $casts = [
                'ID' => 'integer',
        'JID' => 'integer',
        'ShardID' => 'integer',
        'CharID' => 'integer',
        'PackageItemID' => 'integer',
        'Silk_Own' => 'integer',
        'Silk_Gift' => 'integer',
        'Silk_Point' => 'integer',
        'IP' => 'integer',
        'RegDate' => 'datetime',
    ];
        }