        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class OldBlockedUser extends Model
        {
            protected $table = '_OldBlockedUser';
            public $timestamps = false;

            protected $fillable = [
                'UserJID', 'Type', 'SerialNo', 'timeBegin', 'timeEnd'
            ];

            protected $casts = [
                'UserJID' => 'integer',
        'Type' => 'integer',
        'SerialNo' => 'integer',
        'timeBegin' => 'datetime',
        'timeEnd' => 'datetime',
    ];
        }