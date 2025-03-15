<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CasGMChatLog extends Model
{
    public $timestamps = false;
    protected $table = '_CasGMChatLog';
    protected $fillable = [
        'nSerial', 'szGM', 'wShardID', 'szCharName', 'nCasSerial', 'szGMChatLog', 'dWritten'
    ];

    protected $casts = [
        'nSerial' => 'integer',
        'wShardID' => 'integer',
        'nCasSerial' => 'integer',
        'dWritten' => 'datetime',
    ];
    protected $connection = 'sqlsrv';
}
