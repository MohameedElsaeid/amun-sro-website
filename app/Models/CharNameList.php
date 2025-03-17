<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharNameList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharNameList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharNameList query()
 * @mixin \Eloquent
 */
class CharNameList extends Model
{
    public $timestamps = false;
    protected $table = '_CharNameList';
    protected $fillable = [
        'CharName16', 'CharID'
    ];

    protected $casts = [
        'CharID' => 'integer',
    ];
    protected $connection = 'proxy';
}
