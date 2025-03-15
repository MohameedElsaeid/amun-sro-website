<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SokarJobCoin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SokarJobCoin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SokarJobCoin query()
 * @mixin \Eloquent
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
