<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PrivilegedIP extends Model
{
    public $timestamps = false;
    protected $table = '_PrivilegedIP';
    protected $fillable = [
        'IP1', 'IP2', 'IP3', 'IP4', 'IP5', 'IP6', 'IP7', 'IP8'
    ];

    protected $casts = [
        'IP1' => 'integer',
        'IP2' => 'integer',
        'IP3' => 'integer',
        'IP4' => 'integer',
        'IP5' => 'integer',
        'IP6' => 'integer',
        'IP7' => 'integer',
        'IP8' => 'integer',
    ];
}
