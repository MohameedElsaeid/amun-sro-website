        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class TrijobRankingStatus extends Model
        {
            protected $table = '__TrijobRankingStatus__';
            public $timestamps = false;

            protected $fillable = [
                'ShardID', 'Status', 'UpdateTime'
            ];

            protected $casts = [
                'ShardID' => 'integer',
        'Status' => 'integer',
        'UpdateTime' => 'datetime',
    ];
        }