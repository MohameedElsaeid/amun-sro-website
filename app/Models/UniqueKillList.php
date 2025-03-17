<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UniqueKillList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UniqueKillList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UniqueKillList query()
 * @mixin \Eloquent
 */
class UniqueKillList extends Model
{
    public $timestamps = false;
    protected $table = '_UniqueKillList';
    protected $fillable = [
        'ID', 'CharID', 'CodeName128', 'time'
    ];

    protected $casts = [
        'ID' => 'integer',
        'CharID' => 'integer',
        'time' => 'datetime',
    ];
    protected $connection = 'proxy';
}
