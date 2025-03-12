<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Item query()
 * @mixin \Eloquent
 */
class Item extends Model
{
    public $timestamps = false;
    protected $table = 'Items';
    protected $fillable = [
        'ID'
    ];

    protected $casts = [
        'ID' => 'integer',
    ];
}
