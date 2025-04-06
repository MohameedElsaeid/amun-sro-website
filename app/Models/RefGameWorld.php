<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefGameWorld newModelQuery()
 * @method static Builder<static>|RefGameWorld newQuery()
 * @method static Builder<static>|RefGameWorld query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
