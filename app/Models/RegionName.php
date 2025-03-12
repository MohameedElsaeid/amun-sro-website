<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegionName extends Model
{
    public $timestamps = false;
    protected $table = '_RegionNames';
    protected $fillable = [
        'ID', 'RegionID', 'TownName', 'SafeZone', 'TownNumber'
    ];

    protected $casts = [
        'ID' => 'integer',
        'RegionID' => 'integer',
        'TownNumber' => 'integer',
    ];
}
