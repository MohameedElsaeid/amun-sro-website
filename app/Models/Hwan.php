<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|Hwan newModelQuery()
 * @method static Builder<static>|Hwan newQuery()
 * @method static Builder<static>|Hwan query()
 * @mixin Eloquent
 */
class Hwan extends Model
{
    public $timestamps = false;
    protected $table = 'Hwan';
    protected $fillable = [
        'Hwan_Level', 'Title', 'Race', 'lvl'
    ];

    protected $casts = [
        'Hwan_Level' => 'integer',
        'lvl' => 'integer',
    ];
    protected $connection = 'proxy';
}
