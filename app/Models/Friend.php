<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|Friend newModelQuery()
 * @method static Builder<static>|Friend newQuery()
 * @method static Builder<static>|Friend query()
 * @mixin Eloquent
 */
class Friend extends Model
{
    public $timestamps = false;
    protected $table = '_Friend';
    protected $fillable = [
        'CharID', 'FriendCharID', 'FriendCharName', 'RefObjID'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'FriendCharID' => 'integer',
        'RefObjID' => 'integer',
    ];
    protected $connection = 'proxy';
}
