<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GrantingJobCoin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GrantingJobCoin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GrantingJobCoin query()
 * @mixin \Eloquent
 */
class GrantingJobCoin extends Model
{
    public $timestamps = false;
    protected $table = 'GrantingJobCoin';
    protected $fillable = [
        'CharID', 'Amount', 'EventTime'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'Amount' => 'integer',
        'EventTime' => 'datetime',
    ];
    protected $connection = 'log';
}
