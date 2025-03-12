<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefGameWorld newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefGameWorld newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefGameWorld query()
 * @mixin \Eloquent
 */
class RefGameWorld extends Model
{
    public $timestamps = false;
    protected $table = '_RefGame_World';
    protected $fillable = [
        'ID', 'WorldCodeName128', 'Type', 'WorldMaxCount', 'WorldMaxUserCount', 'WorldEntryType', 'WorldEntranceType', 'WorldLeaveType', 'WorldDurationTime', 'WorldEmptyRemainTime', 'ConfigGroupCodeName128'
    ];

    protected $casts = [
        'ID' => 'integer',
        'Type' => 'integer',
        'WorldMaxCount' => 'integer',
        'WorldMaxUserCount' => 'integer',
        'WorldEntryType' => 'integer',
        'WorldEntranceType' => 'integer',
        'WorldLeaveType' => 'integer',
        'WorldDurationTime' => 'integer',
        'WorldEmptyRemainTime' => 'integer',
    ];
}
