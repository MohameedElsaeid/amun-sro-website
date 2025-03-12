<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountJID newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountJID newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|AccountJID query()
 * @mixin \Eloquent
 */
class AccountJID extends Model
{
    public $timestamps = false;
    protected $table = '_AccountJID';
    protected $fillable = [
        'AccountID', 'JID', 'Gold'
    ];

    protected $casts = [
        'JID' => 'integer',
        'Gold' => 'integer',
    ];
}
