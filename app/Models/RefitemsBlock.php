<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefitemsBlock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefitemsBlock newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefitemsBlock query()
 * @mixin \Eloquent
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
}
