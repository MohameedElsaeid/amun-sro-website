<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|Top300 newModelQuery()
 * @method static Builder<static>|Top300 newQuery()
 * @method static Builder<static>|Top300 query()
 * @mixin Eloquent
 */
class Top300 extends Model
{
    public $timestamps = false;
    protected $table = '_Top300';
    protected $fillable = [
        'CharID', 'Data2'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'Data2' => 'integer',
    ];
    protected $connection = 'log';
}
