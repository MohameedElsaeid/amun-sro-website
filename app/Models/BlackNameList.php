<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BlackNameList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BlackNameList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BlackNameList query()
 * @mixin \Eloquent
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
}
