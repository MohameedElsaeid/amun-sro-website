        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class TabRefNest extends Model
        {
            protected $table = 'Tab_RefNest';
            public $timestamps = false;

            protected $fillable = [
                'dwNestID', 'dwHiveID', 'dwTacticsID', 'nRegionDBID', 'fLocalPosX', 'fLocalPosY', 'fLocalPosZ', 'wInitialDir', 'nRadius', 'nGenerateRadius', 'nChampionGenPercentage', 'dwDelayTimeMin', 'dwDelayTimeMax', 'dwMaxTotalCount', 'btFlag', 'btRespawn', 'btType'
            ];

            protected $casts = [
                'dwNestID' => 'integer',
        'dwHiveID' => 'integer',
        'dwTacticsID' => 'integer',
        'nRegionDBID' => 'integer',
        'fLocalPosX' => 'float',
        'fLocalPosY' => 'float',
        'fLocalPosZ' => 'float',
        'wInitialDir' => 'integer',
        'nRadius' => 'integer',
        'nGenerateRadius' => 'integer',
        'nChampionGenPercentage' => 'integer',
        'dwDelayTimeMin' => 'integer',
        'dwDelayTimeMax' => 'integer',
        'dwMaxTotalCount' => 'integer',
        'btFlag' => 'integer',
        'btRespawn' => 'integer',
        'btType' => 'integer',
    ];
        }