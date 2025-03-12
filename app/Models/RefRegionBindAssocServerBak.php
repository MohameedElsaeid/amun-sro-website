<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefRegionBindAssocServerBak newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefRegionBindAssocServerBak newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefRegionBindAssocServerBak query()
 * @mixin \Eloquent
 */
class RefRegionBindAssocServerBak extends Model
{
    public $timestamps = false;
    protected $table = '_RefRegionBindAssocServer_bak';
    protected $fillable = [
        'AreaName', 'AssocServer'
    ];

    protected $casts = [
        'AssocServer' => 'integer',
    ];
}
