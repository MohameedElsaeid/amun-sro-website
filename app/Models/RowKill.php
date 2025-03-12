        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RowKill extends Model
        {
            protected $table = '_RowKills';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'KillerID', 'KilledID', 'Kills'
            ];

            protected $casts = [
                'ID' => 'integer',
        'KillerID' => 'integer',
        'Kills' => 'integer',
    ];
        }