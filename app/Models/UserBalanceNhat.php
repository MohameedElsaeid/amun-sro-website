<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|UserBalanceNhat newModelQuery()
 * @method static Builder<static>|UserBalanceNhat newQuery()
 * @method static Builder<static>|UserBalanceNhat query()
 * @mixin Eloquent
 */
class UserBalanceNhat extends Model
{
    public $timestamps = false;
    protected $table = '_UserBalance_Nhat';
    protected $fillable = [
        'JID', 'Balance'
    ];

    protected $casts = [
        'JID' => 'integer',
        'Balance' => 'float',
    ];
    protected $connection = 'proxy';
}
