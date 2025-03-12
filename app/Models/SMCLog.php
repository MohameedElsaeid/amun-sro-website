        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SMCLog extends Model
        {
            protected $table = '_SMCLog';
            public $timestamps = false;

            protected $fillable = [
                'szUserID', 'Catagory', 'szLog', 'dLogDate'
            ];

            protected $casts = [
                'Catagory' => 'integer',
        'dLogDate' => 'datetime',
    ];
        }