<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefitemsBlock newModelQuery()
 * @method static Builder<static>|RefitemsBlock newQuery()
 * @method static Builder<static>|RefitemsBlock query()
 * @mixin Eloquent
 */
class RefitemsBlock extends Model
{
    public $timestamps = false;
    protected $table = '_RefitemsBlock';
    protected $fillable = [
        'RefItemID'
    ];

    protected $casts = [
        'RefItemID' => 'integer',
    ];
    protected $connection = 'log';
}
