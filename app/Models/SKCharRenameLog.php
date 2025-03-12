        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SKCharRenameLog extends Model
        {
            protected $table = 'SK_CharRenameLog';
            public $timestamps = false;

            protected $fillable = [
                'JID', 'struserid', 'old_char', 'new_char', 'server', 'timechange'
            ];

            protected $casts = [
                'JID' => 'integer',
        'timechange' => 'datetime',
    ];
        }