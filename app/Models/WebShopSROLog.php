<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebShopSROLog extends Model
{
    public $timestamps = false;
    protected $table = '_WebShop_SRO_Log';
    protected $fillable = [
        'ID', 'JID', 'IP', 'CodeName128', 'Balance_Before_Buy', 'Balance_After_Buy'
    ];

    protected $casts = [
        'ID' => 'integer',
        'JID' => 'integer',
        'Balance_Before_Buy' => 'float',
        'Balance_After_Buy' => 'float',
    ];
}
