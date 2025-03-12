        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class TrijobRanking extends Model
        {
            protected $table = '__TrijobRanking__';
            public $timestamps = false;

            protected $fillable = [
                'ShardID', 'TrijobType', 'RankType', 'Rank', 'NickName', 'JobLevel', 'JobData', 'IsNewEntry', 'RankDelta', 'Country'
            ];

            protected $casts = [
                'ShardID' => 'integer',
        'TrijobType' => 'integer',
        'RankType' => 'integer',
        'Rank' => 'integer',
        'JobLevel' => 'integer',
        'JobData' => 'integer',
        'IsNewEntry' => 'integer',
        'RankDelta' => 'integer',
        'Country' => 'integer',
    ];
        }