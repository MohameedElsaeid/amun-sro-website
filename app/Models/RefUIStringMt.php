<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefUIStringMt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefUIStringMt newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefUIStringMt query()
 * @mixin \Eloquent
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
