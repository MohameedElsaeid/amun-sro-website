<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Top100 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Top100 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Top100 query()
 * @mixin \Eloquent
 */
class Top100 extends Model
{
    public $timestamps = false;
    protected $table = '_Top100';
    protected $fillable = [
        'CharID', 'Data2'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'Data2' => 'integer',
    ];
    protected $connection = 'log';
}
