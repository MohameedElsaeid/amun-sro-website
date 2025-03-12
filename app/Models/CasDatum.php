<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CasDatum extends Model
{
    public $timestamps = false;
    protected $table = '_CasData';
    protected $fillable = [
        'nSerial', 'nCategory', 'dReportDate', 'wShardID', 'dwUserJID', 'szCharName', 'szTgtCharName', 'szMailAddress', 'szStatement', 'nStatus', 'dProcessDate', 'szProcessedGM', 'szMemo', 'szAnswer', 'btUserChecked', 'szChatLog'
    ];

    protected $casts = [
        'nSerial' => 'integer',
        'nCategory' => 'integer',
        'dReportDate' => 'datetime',
        'wShardID' => 'integer',
        'dwUserJID' => 'integer',
        'nStatus' => 'integer',
        'dProcessDate' => 'datetime',
        'btUserChecked' => 'integer',
    ];
}
