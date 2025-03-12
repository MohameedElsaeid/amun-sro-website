        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class Tmp extends Model
        {
            protected $table = 'tmp';
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