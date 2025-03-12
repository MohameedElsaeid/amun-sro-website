<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LatestItemSerial extends Model
{
    public $timestamps = false;
    protected $table = '_LatestItemSerial';
    protected $fillable = [
        'LatestItemSerial'
    ];

    protected $casts = [
        'LatestItemSerial' => 'integer',
    ];
}
