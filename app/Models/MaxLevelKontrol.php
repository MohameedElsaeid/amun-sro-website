<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaxLevelKontrol extends Model
{
    public $timestamps = false;
    protected $table = '_MaxLevelKontrol';
    protected $fillable = [
        'CharName', 'Zaman', 'index'
    ];

    protected $casts = [
        'Zaman' => 'datetime',
        'index' => 'integer',
    ];
}
