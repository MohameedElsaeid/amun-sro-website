<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefMagicOptByItemOptLevel extends Model
{
    public $timestamps = false;
    protected $table = '_RefMagicOptByItemOptLevel';
    protected $fillable = [
        'Link', 'RefMagicOptID', 'MagicOptValue', 'TooltipType', 'TooltipCodename'
    ];

    protected $casts = [
        'Link' => 'integer',
        'RefMagicOptID' => 'integer',
        'MagicOptValue' => 'integer',
        'TooltipType' => 'integer',
    ];
}
