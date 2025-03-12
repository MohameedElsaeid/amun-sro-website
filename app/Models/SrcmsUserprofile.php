<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SrcmsUserprofile extends Model
{
    public $timestamps = false;
    protected $table = 'srcms_userprofiles';
    protected $fillable = [
        'JID', 'gender', 'skype', 'msn', 'avatar', 'whois', 'ispublic'
    ];

    protected $casts = [
        'JID' => 'integer',
        'gender' => 'integer',
        'ispublic' => 'integer',
    ];
}
