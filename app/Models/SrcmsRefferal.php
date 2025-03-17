<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SrcmsRefferal extends Model
{
    public $timestamps = false;
    protected $table = 'srcms_refferals';
    protected $fillable = [
        'reffererJID', 'invitedUserJID', 'time', 'ip', 'bonusAdded'
    ];

    protected $casts = [
        'reffererJID' => 'integer',
        'invitedUserJID' => 'integer',
        'bonusAdded' => 'integer',
    ];
    protected $connection = 'sqlsrv';
}
