<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|SokarJobCoin newModelQuery()
 * @method static Builder<static>|SokarJobCoin newQuery()
 * @method static Builder<static>|SokarJobCoin query()
 * @mixin Eloquent
 */
class SokarJobCoin extends Model
{
    public $timestamps = false;
    protected $table = 'SokarJobCoin';
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
