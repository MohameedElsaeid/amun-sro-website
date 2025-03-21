<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefSiegeFortressItemForge newModelQuery()
 * @method static Builder<static>|RefSiegeFortressItemForge newQuery()
 * @method static Builder<static>|RefSiegeFortressItemForge query()
 * @mixin Eloquent
 */
class RefSiegeFortressItemForge extends Model
{
    public $timestamps = false;
    protected $table = '_RefSiegeFortressItemForge';
    protected $fillable = [
        'Service', 'FortressID', 'RefItemID', 'ReqGold', 'ReqGP', 'ForgeTimeMin'
    ];

    protected $casts = [
        'Service' => 'integer',
        'FortressID' => 'integer',
        'RefItemID' => 'integer',
        'ReqGold' => 'integer',
        'ReqGP' => 'integer',
        'ForgeTimeMin' => 'integer',
    ];
    protected $connection = 'proxy';
}
