<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefLevel extends Model
{
    public $timestamps = false;
    protected $table = '_RefLevel';
    protected $fillable = [
        'Lvl', 'Exp_C', 'Exp_M', 'Cost_M', 'Cost_ST', 'GUST_Mob_Exp', 'JobExp_Trader', 'JobExp_Robber', 'JobExp_Hunter'
    ];

    protected $casts = [
        'Lvl' => 'integer',
        'Exp_C' => 'integer',
        'Exp_M' => 'integer',
        'Cost_M' => 'integer',
        'Cost_ST' => 'integer',
        'GUST_Mob_Exp' => 'integer',
        'JobExp_Trader' => 'integer',
        'JobExp_Robber' => 'integer',
        'JobExp_Hunter' => 'integer',
    ];
}
