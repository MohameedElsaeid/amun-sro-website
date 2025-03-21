<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|IncomingPrivateChat newModelQuery()
 * @method static Builder<static>|IncomingPrivateChat newQuery()
 * @method static Builder<static>|IncomingPrivateChat query()
 * @mixin Eloquent
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
