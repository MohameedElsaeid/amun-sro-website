<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|CustomPcLimit newModelQuery()
 * @method static Builder<static>|CustomPcLimit newQuery()
 * @method static Builder<static>|CustomPcLimit query()
 * @mixin Eloquent
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
