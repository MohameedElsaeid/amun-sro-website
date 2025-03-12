        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class LogCashItem extends Model
        {
            protected $table = '_LogCashItem';
            public $timestamps = false;

            protected $fillable = [
                'RefItemID', 'CharID', 'Cnt', 'EventTime', 'Serial64'
            ];

            protected $casts = [
                'RefItemID' => 'integer',
        'CharID' => 'integer',
        'Cnt' => 'integer',
        'EventTime' => 'datetime',
        'Serial64' => 'integer',
    ];
        }