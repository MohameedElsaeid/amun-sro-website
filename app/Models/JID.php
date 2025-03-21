<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|JID newModelQuery()
 * @method static Builder<static>|JID newQuery()
 * @method static Builder<static>|JID query()
 * @mixin Eloquent
 */
class JID extends Model
{
    public $timestamps = false;
    protected $table = 'JID';
    protected $fillable = [
        'ID'
    ];

    protected $casts = [
        'ID' => 'integer',
    ];
    protected $connection = 'log';
}
