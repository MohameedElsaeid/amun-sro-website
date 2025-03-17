<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SrZorGlobalChatLog extends Model
{
    public $timestamps = false;
    protected $table = 'srZor_globalChatLog';
    protected $fillable = [
        'sender', 'msg', 'time'
    ];

    protected $casts = [
        'time' => 'datetime',
    ];
    protected $connection = 'sqlsrv';
}
