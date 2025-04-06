<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|GrantingJobCoin newModelQuery()
 * @method static Builder<static>|GrantingJobCoin newQuery()
 * @method static Builder<static>|GrantingJobCoin query()
 * @mixin Eloquent
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
