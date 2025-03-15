<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuaySoEpoint extends Model
{
    public $timestamps = false;
    protected $table = 'QuaySoEpoint';
    protected $fillable = [
        'ID', 'UserCash', 'Server', 'CharID', 'CharName', 'SP_Own', 'SP_Before', 'SP_After', 'Regdate', 'SourcePoint'
    ];

    protected $casts = [
        'ID' => 'integer',
        'Server' => 'integer',
        'CharID' => 'integer',
        'SP_Own' => 'integer',
        'SP_Before' => 'integer',
        'SP_After' => 'integer',
        'Regdate' => 'datetime',
    ];
    protected $connection = 'sqlsrv';
}
