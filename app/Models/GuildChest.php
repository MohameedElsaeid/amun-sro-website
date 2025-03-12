<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GuildChest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GuildChest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|GuildChest query()
 * @mixin \Eloquent
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
}
