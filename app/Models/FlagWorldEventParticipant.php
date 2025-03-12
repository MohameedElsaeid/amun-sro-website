<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
