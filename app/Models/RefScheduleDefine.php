        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefScheduleDefine extends Model
        {
            protected $table = '_RefScheduleDefine';
            public $timestamps = false;

            protected $fillable = [
                'ScheduleDefineIdx', 'ScheduleName', 'Description'
            ];

            protected $casts = [
                'ScheduleDefineIdx' => 'integer',
    ];
        }