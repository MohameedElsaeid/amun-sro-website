        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class LogEventSiegeFortress extends Model
        {
            protected $table = '_LogEventSiegeFortress';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'FortressID', 'EventTime', 'EventID', 'CharID', 'Data1', 'Data2', 'strDesc'
            ];

            protected $casts = [
                'ID' => 'integer',
        'FortressID' => 'integer',
        'EventTime' => 'datetime',
        'EventID' => 'integer',
        'CharID' => 'integer',
        'Data1' => 'integer',
        'Data2' => 'integer',
    ];
        }