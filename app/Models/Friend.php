<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Friend newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Friend newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Friend query()
 * @mixin \Eloquent
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
}
