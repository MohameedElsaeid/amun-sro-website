        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class TabRefRankingTraderActivity extends Model
        {
            protected $table = 'Tab_RefRanking_TraderActivity';
            public $timestamps = false;

            protected $fillable = [
                'Rank', 'NickName', 'JobLevel', 'JobExp', 'Country'
            ];

            protected $casts = [
                'Rank' => 'integer',
        'JobLevel' => 'integer',
        'JobExp' => 'integer',
        'Country' => 'integer',
    ];
        }