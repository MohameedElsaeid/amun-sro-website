<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|BlackNameList newModelQuery()
 * @method static Builder<static>|BlackNameList newQuery()
 * @method static Builder<static>|BlackNameList query()
 * @mixin Eloquent
 */
class BlackNameList extends Model
{
    public $timestamps = false;
    protected $table = '_BlackNameList';
    protected $fillable = [
        'BlacklistName'
    ];

    protected $casts = [
    ];
    protected $connection = 'proxy';
}
