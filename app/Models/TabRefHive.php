<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|TabRefHive newModelQuery()
 * @method static Builder<static>|TabRefHive newQuery()
 * @method static Builder<static>|TabRefHive query()
 * @mixin Eloquent
 */
class TabRefHive extends Model
{
    public $timestamps = false;
    protected $table = 'Tab_RefHive';
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
    protected $connection = 'proxy';
}
