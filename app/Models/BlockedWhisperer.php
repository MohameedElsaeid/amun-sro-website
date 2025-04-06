<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|BlockedWhisperer newModelQuery()
 * @method static Builder<static>|BlockedWhisperer newQuery()
 * @method static Builder<static>|BlockedWhisperer query()
 * @mixin Eloquent
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
