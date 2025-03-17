<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SMCLog extends Model
{
    public $timestamps = false;
    protected $table = '_SMCLog';
    protected $fillable = [
        'szUserID', 'Catagory', 'szLog', 'dLogDate'
    ];

    protected $casts = [
        'Catagory' => 'integer',
        'dLogDate' => 'datetime',
    ];
    protected $connection = 'sqlsrv';
}
