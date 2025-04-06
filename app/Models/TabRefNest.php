<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|TabRefNest newModelQuery()
 * @method static Builder<static>|TabRefNest newQuery()
 * @method static Builder<static>|TabRefNest query()
 * @mixin Eloquent
 */
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
    protected $connection = 'proxy';
}
