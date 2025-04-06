<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefGameWorldBindGameWorldGroup newModelQuery()
 * @method static Builder<static>|RefGameWorldBindGameWorldGroup newQuery()
 * @method static Builder<static>|RefGameWorldBindGameWorldGroup query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
