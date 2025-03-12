        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class LogServerEvent extends Model
        {
            protected $table = '_LogServerEvent';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'EventTime', 'ServerEventID', 'LogType', 'strDesc'
            ];

            protected $casts = [
                'ID' => 'integer',
        'EventTime' => 'datetime',
        'ServerEventID' => 'integer',
        'LogType' => 'integer',
    ];
        }