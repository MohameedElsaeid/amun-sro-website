<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefGameWorldBindGameWorldGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefGameWorldBindGameWorldGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefGameWorldBindGameWorldGroup query()
 * @mixin \Eloquent
 */
class RefGameWorldBindGameWorldGroup extends Model
{
    public $timestamps = false;
    protected $table = '_RefGameWorldBindGameWorldGroup';
    protected $fillable = [
        'Service', 'ID', 'GameWorldID', 'GameWorldGroupID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'GameWorldID' => 'integer',
        'GameWorldGroupID' => 'integer',
    ];
}
