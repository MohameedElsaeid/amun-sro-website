<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StaticAvatar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StaticAvatar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|StaticAvatar query()
 * @mixin \Eloquent
 */
class StaticAvatar extends Model
{
    public $timestamps = false;
    protected $table = '_StaticAvatar';
    protected $fillable = [
        'CharID', 'Param1', 'Param2', 'Param3', 'Param4', 'Param5', 'Param6', 'Param7', 'Param8', 'Param9', 'Param10', 'Param11', 'Param12', 'Param13', 'Param14', 'Param15', 'Param16'
    ];

    protected $casts = [
        'CharID' => 'integer',
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
        'Param11' => 'integer',
        'Param12' => 'integer',
        'Param13' => 'integer',
        'Param14' => 'integer',
        'Param15' => 'integer',
        'Param16' => 'integer',
    ];
    protected $connection = 'proxy';
}
