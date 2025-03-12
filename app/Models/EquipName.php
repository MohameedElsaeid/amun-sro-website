<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EquipName extends Model
{
    public $timestamps = false;
    protected $table = '_EquipName';
    protected $fillable = [
        'Service', 'TextString', 'EndTextString'
    ];

    protected $casts = [
    ];
}
