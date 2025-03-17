<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UniqueInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UniqueInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UniqueInfo query()
 * @mixin \Eloquent
 */
class UniqueInfo extends Model
{
    public $timestamps = false;
    protected $table = '_UniqueInfo';
    protected $fillable = [
        'CodeName128', 'Name', 'Point'
    ];

    protected $casts = [
        'Point' => 'integer',
    ];
    protected $connection = 'proxy';
}
