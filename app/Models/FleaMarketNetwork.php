        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class FleaMarketNetwork extends Model
        {
            protected $table = '_FleaMarketNetwork';
            public $timestamps = false;

            protected $fillable = [
                'AbleOpen', 'CharID', 'Slot', 'TidGroupID', 'ItemClass', 'ItemCount', 'MakeZone', 'Cash'
            ];

            protected $casts = [
                'AbleOpen' => 'integer',
        'CharID' => 'integer',
        'Slot' => 'integer',
        'TidGroupID' => 'integer',
        'ItemClass' => 'integer',
        'ItemCount' => 'integer',
        'MakeZone' => 'integer',
        'Cash' => 'integer',
    ];
        }