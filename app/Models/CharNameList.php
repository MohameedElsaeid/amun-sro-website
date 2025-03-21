<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|CharNameList newModelQuery()
 * @method static Builder<static>|CharNameList newQuery()
 * @method static Builder<static>|CharNameList query()
 * @mixin Eloquent
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
