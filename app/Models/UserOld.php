<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserOld newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserOld newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserOld query()
 * @mixin \Eloquent
 */
class UserOld extends Model
{
    public $timestamps = false;
    protected $table = '_UserOld';
    protected $fillable = [
        'UserJID', 'CharID1', 'CharID2', 'CharID3', 'Gold'
    ];

    protected $casts = [
        'UserJID' => 'integer',
        'CharID1' => 'integer',
        'CharID2' => 'integer',
        'CharID3' => 'integer',
        'Gold' => 'integer',
    ];
}
