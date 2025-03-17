<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefShardContentConfig newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefShardContentConfig newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefShardContentConfig query()
 * @mixin \Eloquent
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
