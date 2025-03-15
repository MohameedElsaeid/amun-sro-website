<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefSpawnToolVersion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefSpawnToolVersion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefSpawnToolVersion query()
 * @mixin \Eloquent
 */
class TabRefSpawnToolVersion extends Model
{
    public $timestamps = false;
    protected $table = 'Tab_RefSpawnToolVersion';
    protected $fillable = [
        'dwRefDataVersion', 'szVersionDescString'
    ];

    protected $casts = [
        'dwRefDataVersion' => 'integer',
    ];
    protected $connection = 'proxy';
}
