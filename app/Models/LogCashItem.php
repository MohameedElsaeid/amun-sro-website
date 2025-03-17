<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogCashItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogCashItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogCashItem query()
 * @mixin \Eloquent
 */
class LogCashItem extends Model
{
    public $timestamps = false;
    protected $table = '_LogCashItem';
    protected $fillable = [
        'RefItemID', 'CharID', 'Cnt', 'EventTime', 'Serial64'
    ];

    protected $casts = [
        'RefItemID' => 'integer',
        'CharID' => 'integer',
        'Cnt' => 'integer',
        'EventTime' => 'datetime',
        'Serial64' => 'integer',
    ];
    protected $connection = 'log';
}
