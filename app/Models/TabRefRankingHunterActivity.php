        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class TabRefRankingHunterActivity extends Model
        {
            protected $table = 'Tab_RefRanking_HunterActivity';
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