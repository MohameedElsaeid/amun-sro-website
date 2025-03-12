        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class KillDeathCounter extends Model
        {
            protected $table = '_KillDeathCounter';
            public $timestamps = false;

            protected $fillable = [
                'CharId', 'deaths', 'kills', 'code', 'timestamp'
            ];

            protected $casts = [
                'CharId' => 'integer',
        'deaths' => 'integer',
        'kills' => 'integer',
        'timestamp' => 'integer',
    ];
        }