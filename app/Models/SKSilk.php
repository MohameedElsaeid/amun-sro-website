<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SKSilk extends Model
{
    public $timestamps = false;
    protected $table = 'SK_Silk';
    protected $fillable = [
        'JID', 'silk_own', 'silk_gift', 'silk_point'
    ];

    protected $casts = [
        'JID' => 'integer',
        'silk_own' => 'integer',
        'silk_gift' => 'integer',
        'silk_point' => 'integer',
    ];
}
