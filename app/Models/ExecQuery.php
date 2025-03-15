<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExecQuery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExecQuery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ExecQuery query()
 * @mixin \Eloquent
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
