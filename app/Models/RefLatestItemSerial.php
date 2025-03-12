<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefLatestItemSerial extends Model
{
    public $timestamps = false;
    protected $table = '_RefLatestItemSerial';
    protected $fillable = [
        'LatestItemSerial'
    ];

    protected $casts = [
        'LatestItemSerial' => 'integer',
    ];
}
