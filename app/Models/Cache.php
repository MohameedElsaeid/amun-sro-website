<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cache extends Model
{
    public $timestamps = false;
    protected $table = 'cache';
    protected $fillable = [
        'key', 'value', 'expiration'
    ];

    protected $casts = [
        'expiration' => 'integer',
    ];
}
