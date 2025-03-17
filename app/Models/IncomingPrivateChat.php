<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IncomingPrivateChat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IncomingPrivateChat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IncomingPrivateChat query()
 * @mixin \Eloquent
 */
class IncomingPrivateChat extends Model
{
    public $timestamps = false;
    protected $table = '_IncomingPrivateChat';
    protected $fillable = [
        'ID', 'CharName', 'Chat', 'Date'
    ];

    protected $casts = [
        'ID' => 'integer',
    ];
    protected $connection = 'event';
}
