<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RowKill extends Model
{
    public $timestamps = false;
    protected $table = '_RowKills';
    protected $fillable = [
        'ID', 'KillerID', 'KilledID', 'Kills'
    ];

    protected $casts = [
        'ID' => 'integer',
        'KillerID' => 'integer',
        'Kills' => 'integer',
    ];
}
