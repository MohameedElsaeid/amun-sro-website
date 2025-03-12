<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BOXRANDOM1 extends Model
{
    public $timestamps = false;
    protected $table = '_BOXRANDOM1';
    protected $fillable = [
        'GiftItems', 'SpecialItems', 'PremItems'
    ];

    protected $casts = [
    ];
}
