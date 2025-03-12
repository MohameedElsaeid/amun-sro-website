        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class TrijobReward extends Model
        {
            protected $table = '_TrijobRewards';
            public $timestamps = false;

            protected $fillable = [
                'JobType', 'Reward'
            ];

            protected $casts = [
                'JobType' => 'integer',
        'Reward' => 'integer',
    ];
        }