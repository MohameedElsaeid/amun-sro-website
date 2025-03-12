        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SKITEMGuardLog extends Model
        {
            protected $table = 'SK_ITEM_GuardLog';
            public $timestamps = false;

            protected $fillable = [
                'autoID', 'serial64', 'gremain', 'shardID', 'optionLvl', 'LastGuard'
            ];

            protected $casts = [
                'autoID' => 'integer',
        'serial64' => 'integer',
        'gremain' => 'integer',
        'shardID' => 'integer',
        'optionLvl' => 'integer',
        'LastGuard' => 'datetime',
    ];
        }