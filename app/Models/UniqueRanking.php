<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniqueRanking extends Model
{
    public $timestamps = false;
    protected $table = '_UniqueRanking';
    protected $fillable = [
        'CharID', 'CodeName128', 'points'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'points' => 'integer',
    ];
}
