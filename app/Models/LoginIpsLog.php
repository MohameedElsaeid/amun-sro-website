<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LoginIpsLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LoginIpsLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LoginIpsLog query()
 * @mixin \Eloquent
 */
class LoginIpsLog extends Model
{
    public $timestamps = false;
    protected $table = '_Login_Ips_Log';
    protected $fillable = [
        'Charname', 'IP'
    ];

    protected $casts = [
    ];
    protected $connection = 'log';
}
