        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class IPLog extends Model
        {
            protected $table = '_IPLogs';
            public $timestamps = false;

            protected $fillable = [
                'No.', 'CharID', 'Charname', 'IP', 'Date'
            ];

            protected $casts = [
                'No.' => 'integer',
        'CharID' => 'integer',
        'Date' => 'datetime',
    ];
        }