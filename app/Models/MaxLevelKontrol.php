<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|MaxLevelKontrol newModelQuery()
 * @method static Builder<static>|MaxLevelKontrol newQuery()
 * @method static Builder<static>|MaxLevelKontrol query()
 * @mixin Eloquent
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
