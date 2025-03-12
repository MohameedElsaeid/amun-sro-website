        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class OpenMarket extends Model
        {
            protected $table = '_OpenMarket';
            public $timestamps = false;

            protected $fillable = [
                'JID', 'PersnalID', 'CharName16', 'Status', 'RefItemID', 'TidGroupID', 'ItemClass', 'ItemID', 'SellCnt', 'RegDate', 'EndDate', 'Price', 'Deposit', 'SellFee', 'UseCash', 'Serial64'
            ];

            protected $casts = [
                'JID' => 'integer',
        'PersnalID' => 'integer',
        'Status' => 'integer',
        'RefItemID' => 'integer',
        'TidGroupID' => 'integer',
        'ItemClass' => 'integer',
        'ItemID' => 'integer',
        'SellCnt' => 'integer',
        'RegDate' => 'datetime',
        'EndDate' => 'datetime',
        'Price' => 'integer',
        'Deposit' => 'integer',
        'SellFee' => 'integer',
        'UseCash' => 'integer',
        'Serial64' => 'integer',
    ];
        }