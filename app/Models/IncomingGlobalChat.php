<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|IncomingGlobalChat newModelQuery()
 * @method static Builder<static>|IncomingGlobalChat newQuery()
 * @method static Builder<static>|IncomingGlobalChat query()
 * @mixin Eloquent
 */
class IncomingGlobalChat extends Model
{
    public $timestamps = false;
    protected $table = '_IncomingGlobalChat';
    protected $fillable = [
        'ID', 'CharName', 'GlobalChat', 'Date'
    ];

    protected $casts = [
        'ID' => 'integer',
    ];
    protected $connection = 'event';
}
