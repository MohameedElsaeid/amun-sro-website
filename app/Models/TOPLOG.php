<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TOPLOG extends Model
{
    public $timestamps = false;
    protected $table = 'TOPLOG';
    protected $fillable = [
        'No.', 'CharID', 'Charname', 'Date'
    ];

    protected $casts = [
        'No.' => 'integer',
        'CharID' => 'integer',
        'Date' => 'datetime',
    ];
}
