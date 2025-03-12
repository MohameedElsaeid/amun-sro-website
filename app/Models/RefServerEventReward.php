        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefServerEventReward extends Model
        {
            protected $table = '_RefServerEventReward';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'RewardID', 'OwnerServerEventID', 'RefRewardID', 'Quantity', 'RewardClass', 'MasterReward'
            ];

            protected $casts = [
                'Service' => 'integer',
        'RewardID' => 'integer',
        'OwnerServerEventID' => 'integer',
        'RefRewardID' => 'integer',
        'Quantity' => 'integer',
        'RewardClass' => 'integer',
        'MasterReward' => 'integer',
    ];
        }