<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefRegionBindAssocServer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefRegionBindAssocServer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefRegionBindAssocServer query()
 * @mixin \Eloquent
 */
class RefRegionBindAssocServer extends Model
{
    public $timestamps = false;
    protected $table = '_RefRegionBindAssocServer';
    protected $fillable = [
        'AreaName', 'AssocServer'
    ];

    protected $casts = [
        'AssocServer' => 'integer',
    ];
    protected $connection = 'proxy';
}
