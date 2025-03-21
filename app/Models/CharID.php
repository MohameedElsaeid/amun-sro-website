<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|CharID newModelQuery()
 * @method static Builder<static>|CharID newQuery()
 * @method static Builder<static>|CharID query()
 * @mixin Eloquent
 */
class CharID extends Model
{
    public $timestamps = false;
    protected $table = 'CharID';
    protected $fillable = [
        'ID'
    ];

    protected $casts = [
        'ID' => 'integer',
    ];
    protected $connection = 'log';
}
