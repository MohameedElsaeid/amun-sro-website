<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|Paymentwall newModelQuery()
 * @method static Builder<static>|Paymentwall newQuery()
 * @method static Builder<static>|Paymentwall query()
 * @mixin Eloquent
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
