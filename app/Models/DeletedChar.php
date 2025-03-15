<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DeletedChar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DeletedChar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|DeletedChar query()
 * @mixin \Eloquent
 */
class DeletedChar extends Model
{
    public $timestamps = false;
    protected $table = '_DeletedChar';
    protected $fillable = [
        'CharID', 'UserJID', 'DeletedDate'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'UserJID' => 'integer',
        'DeletedDate' => 'datetime',
    ];
    protected $connection = 'proxy';
}
