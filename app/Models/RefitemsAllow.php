<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefitemsAllow newModelQuery()
 * @method static Builder<static>|RefitemsAllow newQuery()
 * @method static Builder<static>|RefitemsAllow query()
 * @mixin Eloquent
 */
class RefitemsAllow extends Model
{
    public $timestamps = false;
    protected $table = '_RefitemsAllow';
    protected $fillable = [
        'RefItemID'
    ];

    protected $casts = [
        'RefItemID' => 'integer',
    ];
    protected $connection = 'log';
}
