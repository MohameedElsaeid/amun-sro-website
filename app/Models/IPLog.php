<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IPLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IPLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|IPLog query()
 * @mixin \Eloquent
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
}
