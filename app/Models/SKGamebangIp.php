<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SKGamebangIp extends Model
{
    public $timestamps = false;
    protected $table = 'SK_gamebang_ip';
    protected $fillable = [
        'nID', 'ip', 'capacity'
    ];

    protected $casts = [
        'nID' => 'integer',
        'ip' => 'integer',
        'capacity' => 'integer',
    ];
    protected $connection = 'sqlsrv';
}
