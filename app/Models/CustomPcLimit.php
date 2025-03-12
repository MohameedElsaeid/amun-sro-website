<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomPcLimit extends Model
{
    public $timestamps = false;
    protected $table = 'CustomPcLimit';
    protected $fillable = [
        'RegionID', 'IPCount', 'HWIDCount'
    ];

    protected $casts = [
        'RegionID' => 'integer',
        'IPCount' => 'integer',
        'HWIDCount' => 'integer',
    ];
}
