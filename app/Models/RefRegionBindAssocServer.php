<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefRegionBindAssocServer newModelQuery()
 * @method static Builder<static>|RefRegionBindAssocServer newQuery()
 * @method static Builder<static>|RefRegionBindAssocServer query()
 * @mixin Eloquent
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
