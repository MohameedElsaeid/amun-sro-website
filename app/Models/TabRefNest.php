<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TabRefNest extends Model
{
    public $timestamps = false;
    protected $table = 'Tab_RefNest';
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
