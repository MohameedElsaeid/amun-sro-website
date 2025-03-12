        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class CharFreePVP extends Model
        {
            protected $table = '_CharFreePVP';
            public $timestamps = false;

            protected $fillable = [
                'CharID', 'Points', 'Kills', 'Deaths', 'LastKill', 'Date', 'CurChamp'
            ];

            protected $casts = [
                'CharID' => 'integer',
        'Points' => 'integer',
        'Kills' => 'integer',
        'Deaths' => 'integer',
        'Date' => 'datetime',
        'CurChamp' => 'integer',
    ];
        }