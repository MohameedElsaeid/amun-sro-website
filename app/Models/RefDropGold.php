<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefDropGold extends Model
{
    public $timestamps = false;
    protected $table = '_RefDropGold';
    protected $fillable = [
        'MonLevel', 'DropProb', 'GoldMin', 'GoldMax'
    ];

    protected $casts = [
        'MonLevel' => 'integer',
        'DropProb' => 'float',
        'GoldMin' => 'integer',
        'GoldMax' => 'integer',
    ];
}
