<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SecurityDescription extends Model
{
    public $timestamps = false;
    protected $table = '_SecurityDescription';
    protected $fillable = [
        'nID', 'szName', 'szDesc'
    ];

    protected $casts = [
        'nID' => 'integer',
    ];
}
