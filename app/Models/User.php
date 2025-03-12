<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @mixin \Eloquent
 */
class User extends Model
{
    public $timestamps = false;
    protected $table = '_User';
    protected $fillable = [
        'UserJID', 'CharID'
    ];

    protected $casts = [
        'UserJID' => 'integer',
        'CharID' => 'integer',
    ];
}
