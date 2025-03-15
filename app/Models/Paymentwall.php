<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Paymentwall newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Paymentwall newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Paymentwall query()
 * @mixin \Eloquent
 */
class Paymentwall extends Model
{
    public $timestamps = false;
    protected $table = '_paymentwall';
    protected $fillable = [
        'JID', 'credits', 'date'
    ];

    protected $casts = [
        'JID' => 'integer',
        'credits' => 'integer',
        'date' => 'datetime',
    ];
    protected $connection = 'log';
}
