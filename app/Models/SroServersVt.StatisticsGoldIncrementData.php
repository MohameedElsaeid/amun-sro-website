        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SroServersVt.StatisticsGoldIncrementData extends Model
        {
            protected $table = 'sro_servers_vt.__StatisticsGoldIncrementData__';
            public $timestamps = false;

            protected $fillable = [
                'BeginDate', 'EndDate', 'Paid', 'Income', 'HunterProfit'
            ];

            protected $casts = [
                'BeginDate' => 'datetime',
        'EndDate' => 'datetime',
        'Paid' => 'integer',
        'Income' => 'integer',
        'HunterProfit' => 'integer',
    ];
        }