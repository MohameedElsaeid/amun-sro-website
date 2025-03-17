<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSiegeFortressGuard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSiegeFortressGuard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSiegeFortressGuard query()
 * @mixin \Eloquent
 */
class RefSiegeFortressGuard extends Model
{
    public $timestamps = false;
    protected $table = '_RefSiegeFortressGuard';
    protected $fillable = [
        'Service', 'FortressID', 'GuardRefObjID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'FortressID' => 'integer',
        'GuardRefObjID' => 'integer',
    ];
    protected $connection = 'proxy';
}
