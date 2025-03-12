<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefInstanceWorldRegion extends Model
{
    public $timestamps = false;
    protected $table = '_RefInstance_World_Region';
    protected $fillable = [
        'WorldID', 'RegionID'
    ];

    protected $casts = [
        'WorldID' => 'integer',
        'RegionID' => 'integer',
    ];
}
