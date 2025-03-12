<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefAbilityByItemOptLevel extends Model
{
    public $timestamps = false;
    protected $table = '_RefAbilityByItemOptLevel';
    protected $fillable = [
        'Service', 'ID', 'RefItemID', 'ItemOptLevel'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'RefItemID' => 'integer',
        'ItemOptLevel' => 'integer',
    ];
}
