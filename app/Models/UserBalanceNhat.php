<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserBalanceNhat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserBalanceNhat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|UserBalanceNhat query()
 * @mixin \Eloquent
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
