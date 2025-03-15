<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BOXRANDOM1 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BOXRANDOM1 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BOXRANDOM1 query()
 * @mixin \Eloquent
 */
class BOXRANDOM1 extends Model
{
    public $timestamps = false;
    protected $table = '_BOXRANDOM1';
    protected $fillable = [
        'GiftItems', 'SpecialItems', 'PremItems'
    ];

    protected $casts = [
    ];
    protected $connection = 'log';
}
