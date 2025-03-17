<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CacheLock extends Model
{
    public $timestamps = false;
    protected $table = 'cache_locks';
    protected $fillable = [
        'key', 'owner', 'expiration'
    ];

    protected $casts = [
        'expiration' => 'integer',
    ];
    protected $connection = 'sqlsrv';
}
