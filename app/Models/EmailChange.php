<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailChange extends Model
{
    public $timestamps = false;
    protected $table = 'Email_Change';
    protected $fillable = [
        'UserID', 'RandomPASS', 'createtime', 'ipaddr'
    ];

    protected $casts = [
        'createtime' => 'datetime',
    ];
    protected $connection = 'sqlsrv';
}
