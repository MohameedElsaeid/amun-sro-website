        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SrcmsPrivatemessage extends Model
        {
            protected $table = 'srcms_privatemessages';
            public $timestamps = false;

            protected $fillable = [
                'sender', 'receiver', 'title', 'msg', 'viewed', 'time'
            ];

            protected $casts = [
                'sender' => 'integer',
        'receiver' => 'integer',
        'viewed' => 'integer',
        'time' => 'datetime',
    ];
        }