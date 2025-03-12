        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class BlockedUser extends Model
        {
            protected $table = '_BlockedUser';
            public $timestamps = false;

            protected $fillable = [
                'UserJID', 'UserID', 'Type', 'SerialNo', 'timeBegin', 'timeEnd'
            ];

            protected $casts = [
                'UserJID' => 'integer',
        'Type' => 'integer',
        'SerialNo' => 'integer',
        'timeBegin' => 'datetime',
        'timeEnd' => 'datetime',
    ];
        }