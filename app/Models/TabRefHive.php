<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefHive newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefHive newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefHive query()
 * @mixin \Eloquent
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
