<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|ItemsDrop newModelQuery()
 * @method static Builder<static>|ItemsDrop newQuery()
 * @method static Builder<static>|ItemsDrop query()
 * @mixin Eloquent
 */
class ItemsDrop extends Model
{
    public $timestamps = false;
    protected $table = '_ItemsDrop';
    protected $fillable = [
        'CharID', 'Serial64'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'Serial64' => 'integer',
    ];
    protected $connection = 'log';
}
