<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|AccountJID newModelQuery()
 * @method static Builder<static>|AccountJID newQuery()
 * @method static Builder<static>|AccountJID query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
