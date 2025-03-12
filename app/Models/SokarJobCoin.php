        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SokarJobCoin extends Model
        {
            protected $table = 'SokarJobCoin';
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