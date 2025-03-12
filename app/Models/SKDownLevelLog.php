        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SKDownLevelLog extends Model
        {
            protected $table = 'SK_DownLevelLog';
            public $timestamps = false;

            protected $fillable = [
                'JID', 'struserid', 'charname', 'package', 'newlevel', 'server', 'timedown'
            ];

            protected $casts = [
                'JID' => 'integer',
        'timedown' => 'datetime',
    ];
        }