<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IPLog extends Model
{
    public $timestamps = false;
    protected $table = '_IPLogs';
    protected $fillable = [
        'No.', 'CharID', 'Charname', 'IP', 'Date'
    ];

    protected $casts = [
        'No.' => 'integer',
        'CharID' => 'integer',
        'Date' => 'datetime',
    ];
}
