        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefEventZone extends Model
        {
            protected $table = '_RefEventZone';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'ID', 'ZoneName', 'EventName', 'Param1', 'Param2', 'Param3', 'Param4', 'Param5', 'strParam1', 'strParam2', 'strParam3', 'strParam4', 'strParam5'
            ];

            protected $casts = [
                'Service' => 'integer',
        'ID' => 'integer',
        'Param1' => 'integer',
        'Param2' => 'integer',
        'Param3' => 'integer',
        'Param4' => 'integer',
        'Param5' => 'integer',
    ];
        }