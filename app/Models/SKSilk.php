<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SKSilk extends Model
{
    public $timestamps = false;
    protected $table = 'dbo.SK_Silk';
    protected $fillable = [
        'JID', 'silk_own', 'silk_gift', 'silk_point'
    ];
    protected $primaryKey = 'JID';

    protected $casts = [
        'JID' => 'integer',
        'silk_own' => 'integer',
        'silk_gift' => 'integer',
        'silk_point' => 'integer',
    ];
    protected $connection = 'sqlsrv';
}
