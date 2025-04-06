<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|LogCashItem newModelQuery()
 * @method static Builder<static>|LogCashItem newQuery()
 * @method static Builder<static>|LogCashItem query()
 * @mixin Eloquent
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
