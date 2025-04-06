<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|CharTrijobSafeTrade newModelQuery()
 * @method static Builder<static>|CharTrijobSafeTrade newQuery()
 * @method static Builder<static>|CharTrijobSafeTrade query()
 * @mixin Eloquent
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
