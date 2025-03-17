<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSiegeFortressItemForge newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSiegeFortressItemForge newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSiegeFortressItemForge query()
 * @mixin \Eloquent
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
