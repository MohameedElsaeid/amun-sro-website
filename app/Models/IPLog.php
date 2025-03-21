<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|IPLog newModelQuery()
 * @method static Builder<static>|IPLog newQuery()
 * @method static Builder<static>|IPLog query()
 * @mixin Eloquent
 */
class IPLog extends Model
{
    public $timestamps = false;
    protected $table = '_IPLogs';
    protected $fillable = [
        'No.', 'CharID', 'Charname', 'IP', 'Date'
    ];

    protected $casts = [
        'No.' => 'integer',
        'CharID' => 'integer',
        'Date' => 'datetime',
    ];
    protected $connection = 'log';
}
