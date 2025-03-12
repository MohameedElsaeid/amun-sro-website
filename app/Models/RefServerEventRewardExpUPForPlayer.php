        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefServerEventRewardExpUPForPlayer extends Model
        {
            protected $table = '_RefServerEventReward_ExpUPForPlayers';
            public $timestamps = false;

            protected $fillable = [
                'OwnerRewardID', 'ApplyTime', 'ApplyExpRatio', 'ApplySExpRatio'
            ];

            protected $casts = [
                'OwnerRewardID' => 'integer',
        'ApplyTime' => 'integer',
        'ApplyExpRatio' => 'integer',
        'ApplySExpRatio' => 'integer',
    ];
        }