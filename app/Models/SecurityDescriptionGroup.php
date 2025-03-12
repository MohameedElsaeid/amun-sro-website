<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SecurityDescriptionGroup extends Model
{
    public $timestamps = false;
    protected $table = '_SecurityDescriptionGroup';
    protected $fillable = [
        'nID', 'szName', 'szDesc'
    ];

    protected $casts = [
        'nID' => 'integer',
    ];
}
