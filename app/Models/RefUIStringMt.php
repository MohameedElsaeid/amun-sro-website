<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefUIStringMt newModelQuery()
 * @method static Builder<static>|RefUIStringMt newQuery()
 * @method static Builder<static>|RefUIStringMt query()
 * @mixin Eloquent
 */
class RefUIStringMt extends Model
{
    public $timestamps = false;
    protected $table = '_RefUIString_Mt';
    protected $fillable = [
        'ID', 'GroupCodeName128', 'ValueCodeName128', 'Value', 'Type'
    ];

    protected $casts = [
        'ID' => 'integer',
    ];
    protected $connection = 'proxy';
}
