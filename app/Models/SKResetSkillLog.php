<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SKResetSkillLog extends Model
{
    public $timestamps = false;
    protected $table = 'SK_ResetSkillLog';
    protected $fillable = [
        'JID', 'struserid', 'charname', 'SkillDown', 'NewSkill', 'SilkDown', 'server', 'TimeReset'
    ];

    protected $casts = [
        'JID' => 'integer',
        'TimeReset' => 'datetime',
    ];
    protected $connection = 'sqlsrv';
}
