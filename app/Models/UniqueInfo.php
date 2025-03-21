<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|UniqueInfo newModelQuery()
 * @method static Builder<static>|UniqueInfo newQuery()
 * @method static Builder<static>|UniqueInfo query()
 * @mixin Eloquent
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
