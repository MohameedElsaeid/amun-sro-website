<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BOXRANDOM extends Model
{
    public $timestamps = false;
    protected $table = '_BOXRANDOM';
    protected $fillable = [
        'GiftItems', 'SpecialItems', 'PremItems'
    ];

    protected $casts = [
    ];
}
