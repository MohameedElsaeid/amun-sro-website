<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|LoginIpsLog newModelQuery()
 * @method static Builder<static>|LoginIpsLog newQuery()
 * @method static Builder<static>|LoginIpsLog query()
 * @mixin Eloquent
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
