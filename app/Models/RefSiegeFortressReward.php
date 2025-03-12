        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefSiegeFortressReward extends Model
        {
            protected $table = '_RefSiegeFortressRewards';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'FortressID', 'RewardTypeID', 'RewardValue', 'RewardCount'
            ];

            protected $casts = [
                'Service' => 'integer',
        'FortressID' => 'integer',
        'RewardTypeID' => 'integer',
        'RewardValue' => 'integer',
        'RewardCount' => 'integer',
    ];
        }