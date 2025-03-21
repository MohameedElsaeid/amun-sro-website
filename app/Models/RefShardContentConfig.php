<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefShardContentConfig newModelQuery()
 * @method static Builder<static>|RefShardContentConfig newQuery()
 * @method static Builder<static>|RefShardContentConfig query()
 * @mixin Eloquent
 */
class RefShardContentConfig extends Model
{
    public $timestamps = false;
    protected $table = '_RefShardContentConfig';
    protected $fillable = [
        'Service', 'ID', 'CodeName128', 'CodeDesc128', 'Value', 'Type'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
    ];
    protected $connection = 'proxy';
}
