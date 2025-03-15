<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Magopt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Magopt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Magopt query()
 * @mixin \Eloquent
 */
class Magopt extends Model
{
    public $timestamps = false;
    protected $table = '_Magopt';
    protected $fillable = [
        'name', 'desc', 'mLevel', 'extension', 'sortkey'
    ];

    protected $casts = [
        'mLevel' => 'integer',
        'sortkey' => 'integer',
    ];
    protected $connection = 'proxy';
}
