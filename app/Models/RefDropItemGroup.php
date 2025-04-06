<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefDropItemGroup newModelQuery()
 * @method static Builder<static>|RefDropItemGroup newQuery()
 * @method static Builder<static>|RefDropItemGroup query()
 * @mixin Eloquent
 */
class RefDropItemGroup extends Model
{
    public $timestamps = false;
    protected $table = '_RefDropItemGroup';
    protected $fillable = [
        'Service', 'RefItemGroupID', 'CodeName128', 'RefItemID', 'SelectRatio', 'RefMagicGroupID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'RefItemGroupID' => 'integer',
        'RefItemID' => 'integer',
        'SelectRatio' => 'float',
        'RefMagicGroupID' => 'integer',
    ];
    protected $connection = 'proxy';
}
