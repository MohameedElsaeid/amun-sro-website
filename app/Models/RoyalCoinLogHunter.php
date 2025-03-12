        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RoyalCoinLogHunter extends Model
        {
            protected $table = 'RoyalCoinLogHunters';
            public $timestamps = false;

            protected $fillable = [
                'CharID', 'Amount', 'EventTime'
            ];

            protected $casts = [
                'CharID' => 'integer',
        'Amount' => 'integer',
        'EventTime' => 'datetime',
    ];
        }