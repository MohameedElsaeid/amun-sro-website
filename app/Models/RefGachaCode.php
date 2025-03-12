<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefGachaCode extends Model
{
    public $timestamps = false;
    protected $table = '_RefGachaCode';
    protected $fillable = [
        'CodeName128', 'GachaSetID'
    ];

    protected $casts = [
        'GachaSetID' => 'integer',
    ];
}
