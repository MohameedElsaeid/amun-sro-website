<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefUIStringMt extends Model
{
    public $timestamps = false;
    protected $table = '_RefUIString_Mt';
    protected $fillable = [
        'ID', 'GroupCodeName128', 'ValueCodeName128', 'Value', 'Type'
    ];

    protected $casts = [
        'ID' => 'integer',
    ];
}
