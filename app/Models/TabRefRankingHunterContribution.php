        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class TabRefRankingHunterContribution extends Model
        {
            protected $table = 'Tab_RefRanking_HunterContribution';
            public $timestamps = false;

            protected $fillable = [
                'Rank', 'NickName', 'JobLevel', 'Contribution'
            ];

            protected $casts = [
                'Rank' => 'integer',
        'JobLevel' => 'integer',
        'Contribution' => 'integer',
    ];
        }