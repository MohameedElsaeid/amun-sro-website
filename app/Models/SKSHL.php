        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SKSHL extends Model
        {
            protected $table = 'SK_SHL';
            public $timestamps = false;

            protected $fillable = [
                'idx', 'JID', 'COS', 'CGS', 'HOS', 'HGS', 'event_time'
            ];

            protected $casts = [
                'idx' => 'integer',
        'JID' => 'integer',
        'COS' => 'integer',
        'CGS' => 'integer',
        'HOS' => 'integer',
        'HGS' => 'integer',
        'event_time' => 'datetime',
    ];
        }