<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserBalanceNhat extends Model
{
    public $timestamps = false;
    protected $table = '_UserBalance_Nhat';
    protected $fillable = [
        'JID', 'Balance'
    ];

    protected $casts = [
        'JID' => 'integer',
        'Balance' => 'float',
    ];
}
