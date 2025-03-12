        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class ServiceManagerLog extends Model
        {
            protected $table = '_ServiceManagerLog';
            public $timestamps = false;

            protected $fillable = [
                'nUserID', 'EventTime', 'szLog'
            ];

            protected $casts = [
                'nUserID' => 'integer',
        'EventTime' => 'datetime',
    ];
        }