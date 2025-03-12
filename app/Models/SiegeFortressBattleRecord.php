        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SiegeFortressBattleRecord extends Model
        {
            protected $table = '_SiegeFortressBattleRecord';
            public $timestamps = false;

            protected $fillable = [
                'FortressID', 'CharID', 'KillCount', 'KilledCount', 'RankUpDate', 'CurRank'
            ];

            protected $casts = [
                'FortressID' => 'integer',
        'CharID' => 'integer',
        'KillCount' => 'integer',
        'KilledCount' => 'integer',
        'RankUpDate' => 'datetime',
        'CurRank' => 'integer',
    ];
        }