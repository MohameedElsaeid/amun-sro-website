<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|Chest newModelQuery()
 * @method static Builder<static>|Chest newQuery()
 * @method static Builder<static>|Chest query()
 * @mixin Eloquent
 */
class Chest extends Model
{
    public $timestamps = false;
    protected $table = '_Chest';
    protected $fillable = [
        'UserJID', 'Slot', 'ItemID'
    ];

    protected $casts = [
        'UserJID' => 'integer',
        'Slot' => 'integer',
        'ItemID' => 'integer',
    ];
    protected $connection = 'proxy';
}
