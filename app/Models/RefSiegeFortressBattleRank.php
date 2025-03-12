        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefSiegeFortressBattleRank extends Model
        {
            protected $table = '_RefSiegeFortressBattleRank';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'RankLvl', 'RankName', 'ReqPKCount', 'BindedSkillID', 'CrestPath128'
            ];

            protected $casts = [
                'Service' => 'integer',
        'RankLvl' => 'integer',
        'ReqPKCount' => 'integer',
        'BindedSkillID' => 'integer',
    ];
        }