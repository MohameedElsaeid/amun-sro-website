<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Chest query()
 * @mixin \Eloquent
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
