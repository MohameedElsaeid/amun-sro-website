<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|ExecQuery newModelQuery()
 * @method static Builder<static>|ExecQuery newQuery()
 * @method static Builder<static>|ExecQuery query()
 * @mixin Eloquent
 */
class ExecQuery extends Model
{
    public $timestamps = false;
    protected $table = 'ExecQuery';
    protected $fillable = [
        'ID', 'Day', 'Time', 'DatabaseIndex', 'Query'
    ];

    protected $casts = [
        'ID' => 'integer',
        'DatabaseIndex' => 'integer',
    ];
    protected $connection = 'event';
}
