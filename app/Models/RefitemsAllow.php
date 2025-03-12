<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefitemsAllow newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefitemsAllow newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefitemsAllow query()
 * @mixin \Eloquent
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
}
