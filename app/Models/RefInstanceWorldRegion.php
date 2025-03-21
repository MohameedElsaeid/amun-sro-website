<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefInstanceWorldRegion newModelQuery()
 * @method static Builder<static>|RefInstanceWorldRegion newQuery()
 * @method static Builder<static>|RefInstanceWorldRegion query()
 * @mixin Eloquent
 */
class RefInstanceWorldRegion extends Model
{
    public $timestamps = false;
    protected $table = '_RefInstance_World_Region';
    protected $fillable = [
        'WorldID', 'RegionID'
    ];

    protected $casts = [
        'WorldID' => 'integer',
        'RegionID' => 'integer',
    ];
    protected $connection = 'proxy';
}
