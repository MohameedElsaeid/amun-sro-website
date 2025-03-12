        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class Shard extends Model
        {
            protected $table = '_Shard';
            public $timestamps = false;

            protected $fillable = [
                'nID', 'nFarmID', 'nContentID', 'szName', 'szDesc', 'szDBConfig', 'nMaxUser', 'nStartupServerID', 'nStatus', 'nCurrentUserRatio'
            ];

            protected $casts = [
                'nID' => 'integer',
        'nFarmID' => 'integer',
        'nContentID' => 'integer',
        'nMaxUser' => 'integer',
        'nStartupServerID' => 'integer',
        'nStatus' => 'integer',
        'nCurrentUserRatio' => 'integer',
    ];
        }