<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GuildMember extends Model
{
    public $timestamps = false;
    protected $table = '_GuildMember';
    protected $fillable = [
        'GuildID', 'CharID', 'CharName', 'MemberClass', 'CharLevel', 'GP_Donation', 'JoinDate', 'Permission', 'Contribution', 'GuildWarKill', 'GuildWarKilled', 'Nickname', 'RefObjID', 'SiegeAuthority'
    ];

    protected $casts = [
        'GuildID' => 'integer',
        'CharID' => 'integer',
        'MemberClass' => 'integer',
        'CharLevel' => 'integer',
        'GP_Donation' => 'integer',
        'JoinDate' => 'datetime',
        'Permission' => 'integer',
        'Contribution' => 'integer',
        'GuildWarKill' => 'integer',
        'GuildWarKilled' => 'integer',
        'RefObjID' => 'integer',
        'SiegeAuthority' => 'integer',
    ];
}
