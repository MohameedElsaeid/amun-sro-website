<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|FlagWorldEventParticipant newModelQuery()
 * @method static Builder<static>|FlagWorldEventParticipant newQuery()
 * @method static Builder<static>|FlagWorldEventParticipant query()
 * @mixin Eloquent
 */
class FlagWorldEventParticipant extends Model
{
    public $timestamps = false;
    protected $table = '_FlagWorld_EventParticipants';
    protected $fillable = [
        'JID', 'LatestAttempt', 'Count'
    ];

    protected $casts = [
        'JID' => 'integer',
        'LatestAttempt' => 'datetime',
        'Count' => 'integer',
    ];
    protected $connection = 'proxy';
}
