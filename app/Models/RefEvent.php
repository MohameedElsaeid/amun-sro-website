        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefEvent extends Model
        {
            protected $table = '_RefEvent';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'ID', 'CodeName', 'DescName', 'ScheduleName', 'ScheduleCount'
            ];

            protected $casts = [
                'Service' => 'integer',
        'ID' => 'integer',
        'ScheduleCount' => 'integer',
    ];
        }