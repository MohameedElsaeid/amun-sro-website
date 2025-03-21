<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|GuildChest newModelQuery()
 * @method static Builder<static>|GuildChest newQuery()
 * @method static Builder<static>|GuildChest query()
 * @mixin Eloquent
 */
class GuildChest extends Model
{
    public $timestamps = false;
    protected $table = '_GuildChest';
    protected $fillable = [
        'GuildID', 'Slot', 'ItemID'
    ];

    protected $casts = [
        'GuildID' => 'integer',
        'Slot' => 'integer',
        'ItemID' => 'integer',
    ];
    protected $connection = 'proxy';
}
