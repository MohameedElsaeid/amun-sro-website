<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefInstanceWorldStartPo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefInstanceWorldStartPo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefInstanceWorldStartPo query()
 * @mixin \Eloquent
 */
class RefInstanceWorldStartPo extends Model
{
    public $timestamps = false;
    protected $table = '_RefInstance_World_Start_Pos';
    protected $fillable = [
        'WorldID', 'RegionID', 'PosX', 'PosY', 'PosZ', 'Param'
    ];

    protected $casts = [
        'WorldID' => 'integer',
        'RegionID' => 'integer',
        'PosX' => 'integer',
        'PosY' => 'integer',
        'PosZ' => 'integer',
        'Param' => 'integer',
    ];
    protected $connection = 'proxy';
}
