<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|Magopt newModelQuery()
 * @method static Builder<static>|Magopt newQuery()
 * @method static Builder<static>|Magopt query()
 * @mixin Eloquent
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
