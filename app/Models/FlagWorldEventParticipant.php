<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FlagWorldEventParticipant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FlagWorldEventParticipant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|FlagWorldEventParticipant query()
 * @mixin \Eloquent
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
}
