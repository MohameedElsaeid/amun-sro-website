<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BlockedWhisperer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BlockedWhisperer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|BlockedWhisperer query()
 * @mixin \Eloquent
 */
class BlockedWhisperer extends Model
{
    public $timestamps = false;
    protected $table = '_BlockedWhisperers';
    protected $fillable = [
        'OwnerID', 'TargetName'
    ];

    protected $casts = [
        'OwnerID' => 'integer',
    ];
    protected $connection = 'proxy';
}
