<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|TOPLOG newModelQuery()
 * @method static Builder<static>|TOPLOG newQuery()
 * @method static Builder<static>|TOPLOG query()
 * @mixin Eloquent
 */
class TOPLOG extends Model
{
    public $timestamps = false;
    protected $table = 'TOPLOG';
    protected $fillable = [
        'No.', 'CharID', 'Charname', 'Date'
    ];

    protected $casts = [
        'No.' => 'integer',
        'CharID' => 'integer',
        'Date' => 'datetime',
    ];
    protected $connection = 'log';
}
