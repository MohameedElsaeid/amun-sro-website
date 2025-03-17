<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharTrijobSafeTrade newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharTrijobSafeTrade newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharTrijobSafeTrade query()
 * @mixin \Eloquent
 */
class CharTrijobSafeTrade extends Model
{
    public $timestamps = false;
    protected $table = '_CharTrijobSafeTrade';
    protected $fillable = [
        'CharID', 'AbleCount', 'Status', 'LastSafeTrade'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'AbleCount' => 'integer',
        'Status' => 'integer',
        'LastSafeTrade' => 'datetime',
    ];
    protected $connection = 'proxy';
}
