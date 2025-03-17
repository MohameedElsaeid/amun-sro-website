<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IncomingGlobalChat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IncomingGlobalChat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IncomingGlobalChat query()
 * @mixin \Eloquent
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
