        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class ServerEventReward extends Model
        {
            protected $table = '_ServerEventReward';
            public $timestamps = false;

            protected $fillable = [
                'ServerEventID', 'RewardID', 'RemainRewardTime'
            ];

            protected $casts = [
                'ServerEventID' => 'integer',
        'RewardID' => 'integer',
        'RemainRewardTime' => 'integer',
    ];
        }