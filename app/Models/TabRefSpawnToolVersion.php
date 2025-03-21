<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|TabRefSpawnToolVersion newModelQuery()
 * @method static Builder<static>|TabRefSpawnToolVersion newQuery()
 * @method static Builder<static>|TabRefSpawnToolVersion query()
 * @mixin Eloquent
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
