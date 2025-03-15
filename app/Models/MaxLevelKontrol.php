<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MaxLevelKontrol newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MaxLevelKontrol newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|MaxLevelKontrol query()
 * @mixin \Eloquent
 */
class MaxLevelKontrol extends Model
{
    public $timestamps = false;
    protected $table = '_MaxLevelKontrol';
    protected $fillable = [
        'CharName', 'Zaman', 'index'
    ];

    protected $casts = [
        'Zaman' => 'datetime',
        'index' => 'integer',
    ];
    protected $connection = 'log';
}
