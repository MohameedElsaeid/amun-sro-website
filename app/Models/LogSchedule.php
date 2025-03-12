        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class LogSchedule extends Model
        {
            protected $table = '_LogSchedule';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'ServerType', 'ServerBodyID', 'ScheduleDefine', 'ScheduleIdx', 'Type', 'OccureTime'
            ];

            protected $casts = [
                'ID' => 'integer',
        'ServerBodyID' => 'integer',
        'ScheduleIdx' => 'integer',
        'OccureTime' => 'datetime',
    ];
        }