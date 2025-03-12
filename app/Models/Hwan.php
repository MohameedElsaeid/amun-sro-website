<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hwan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hwan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Hwan query()
 * @mixin \Eloquent
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
}
