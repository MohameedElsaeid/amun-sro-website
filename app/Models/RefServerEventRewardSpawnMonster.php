        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefServerEventRewardSpawnMonster extends Model
        {
            protected $table = '_RefServerEventReward_SpawnMonster';
            public $timestamps = false;

            protected $fillable = [
                'OwnerRewardID', 'RegionID', 'PosX', 'PosY', 'PosZ'
            ];

            protected $casts = [
                'OwnerRewardID' => 'integer',
        'RegionID' => 'integer',
        'PosX' => 'float',
        'PosY' => 'float',
        'PosZ' => 'float',
    ];
        }