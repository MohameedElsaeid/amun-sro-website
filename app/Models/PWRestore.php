<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PWRestore extends Model
{
    public $timestamps = false;
    protected $table = 'PW_Restore';
    protected $fillable = [
        'UserID', 'RandomPASS', 'createtime', 'ipaddr'
    ];

    protected $casts = [
        'createtime' => 'datetime',
    ];
}
