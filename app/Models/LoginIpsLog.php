<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginIpsLog extends Model
{
    public $timestamps = false;
    protected $table = '_Login_Ips_Log';
    protected $fillable = [
        'Charname', 'IP'
    ];

    protected $casts = [
    ];
}
