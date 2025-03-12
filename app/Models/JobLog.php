<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobLog extends Model
{
    public $timestamps = false;
    protected $table = 'JobLog';
    protected $fillable = [
        'UserJID', 'Amount', 'Limited', 'Date', 'TotalAmount', 'index'
    ];

    protected $casts = [
        'UserJID' => 'integer',
        'Amount' => 'integer',
        'Limited' => 'integer',
        'Date' => 'datetime',
        'TotalAmount' => 'integer',
        'index' => 'integer',
    ];
}
