<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefInstanceWorldRegion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefInstanceWorldRegion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefInstanceWorldRegion query()
 * @mixin \Eloquent
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
}
