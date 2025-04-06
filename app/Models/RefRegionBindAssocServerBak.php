<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefRegionBindAssocServerBak newModelQuery()
 * @method static Builder<static>|RefRegionBindAssocServerBak newQuery()
 * @method static Builder<static>|RefRegionBindAssocServerBak query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
