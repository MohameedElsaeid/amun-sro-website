<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;
    protected $table = '_User';
    protected $fillable = [
        'UserJID', 'CharID'
    ];

    protected $casts = [
        'UserJID' => 'integer',
        'CharID' => 'integer',
    ];
}
