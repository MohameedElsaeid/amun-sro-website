<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|UserOld newModelQuery()
 * @method static Builder<static>|UserOld newQuery()
 * @method static Builder<static>|UserOld query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
