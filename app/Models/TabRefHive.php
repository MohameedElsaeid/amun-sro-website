        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class TabRefHive extends Model
        {
            protected $table = 'Tab_RefHive';
            public $timestamps = false;

            protected $fillable = [
                'dwHiveID', 'btKeepMonsterCountType', 'dwOverwriteMaxTotalCount', 'fMonsterCountPerPC', 'dwSpawnSpeedIncreaseRate', 'dwMaxIncreaseRate', 'btFlag', 'GameWorldID', 'HatchObjType', 'szDescString128'
            ];

            protected $casts = [
                'dwHiveID' => 'integer',
        'btKeepMonsterCountType' => 'integer',
        'dwOverwriteMaxTotalCount' => 'integer',
        'fMonsterCountPerPC' => 'float',
        'dwSpawnSpeedIncreaseRate' => 'integer',
        'dwMaxIncreaseRate' => 'integer',
        'btFlag' => 'integer',
        'GameWorldID' => 'integer',
        'HatchObjType' => 'integer',
    ];
        }