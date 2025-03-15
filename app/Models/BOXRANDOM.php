<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BOXRANDOM newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BOXRANDOM newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BOXRANDOM query()
 * @mixin \Eloquent
 */
class BOXRANDOM extends Model
{
    public $timestamps = false;
    protected $table = '_BOXRANDOM';
    protected $fillable = [
        'GiftItems', 'SpecialItems', 'PremItems'
    ];

    protected $casts = [
    ];
    protected $connection = 'log';
}
