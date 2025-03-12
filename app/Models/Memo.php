<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    public $timestamps = false;
    protected $table = '_Memo';
    protected $fillable = [
        'ID64', 'CharID', 'FromCharName', 'Message', 'Date', 'Status', 'RefObjID'
    ];

    protected $casts = [
        'ID64' => 'integer',
        'CharID' => 'integer',
        'Date' => 'datetime',
        'Status' => 'integer',
        'RefObjID' => 'integer',
    ];
}
