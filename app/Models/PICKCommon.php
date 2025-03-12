<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PICKCommon extends Model
{
    public $timestamps = false;
    protected $table = 'PICK_Common';
    protected $fillable = [
        'ID', 'GroupID', 'GroupCodeName', 'ItemCodeName', 'ItemCount', 'ItemPlus', 'Ratio'
    ];

    protected $casts = [
        'ID' => 'integer',
        'GroupID' => 'integer',
        'ItemCount' => 'integer',
        'ItemPlus' => 'integer',
        'Ratio' => 'float',
    ];
}
