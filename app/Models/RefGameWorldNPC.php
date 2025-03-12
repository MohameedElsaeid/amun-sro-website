<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefGameWorldNPC newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefGameWorldNPC newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefGameWorldNPC query()
 * @mixin \Eloquent
 */
class RefGameWorldNPC extends Model
{
    public $timestamps = false;
    protected $table = '_RefGameWorldNPC';
    protected $fillable = [
        'ID', 'WorldCodeName128', 'NPCCodeName128', 'RegionID', 'PosX', 'PosY', 'PosZ', 'Param1', 'Param2', 'Param3', 'Param4', 'Param5', 'Param6', 'Param7', 'Param8', 'Param9', 'Param10'
    ];

    protected $casts = [
        'ID' => 'integer',
        'RegionID' => 'integer',
        'PosX' => 'integer',
        'PosY' => 'integer',
        'PosZ' => 'integer',
        'Param1' => 'integer',
        'Param2' => 'integer',
        'Param3' => 'integer',
        'Param4' => 'integer',
        'Param5' => 'integer',
        'Param6' => 'integer',
        'Param7' => 'integer',
        'Param8' => 'integer',
        'Param9' => 'integer',
        'Param10' => 'integer',
    ];
}
