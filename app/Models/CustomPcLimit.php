<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CustomPcLimit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CustomPcLimit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CustomPcLimit query()
 * @mixin \Eloquent
 */
class CustomPcLimit extends Model
{
    public $timestamps = false;
    protected $table = 'CustomPcLimit';
    protected $fillable = [
        'RegionID', 'IPCount', 'HWIDCount'
    ];

    protected $casts = [
        'RegionID' => 'integer',
        'IPCount' => 'integer',
        'HWIDCount' => 'integer',
    ];
    protected $connection = 'custom';
}
