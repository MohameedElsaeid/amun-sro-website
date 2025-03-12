        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class GrantingJobCoin extends Model
        {
            protected $table = 'GrantingJobCoin';
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