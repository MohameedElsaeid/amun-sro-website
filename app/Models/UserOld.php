<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserOld extends Model
{
    public $timestamps = false;
    protected $table = '_UserOld';
    protected $fillable = [
        'UserJID', 'CharID1', 'CharID2', 'CharID3', 'Gold'
    ];

    protected $casts = [
        'UserJID' => 'integer',
        'CharID1' => 'integer',
        'CharID2' => 'integer',
        'CharID3' => 'integer',
        'Gold' => 'integer',
    ];
}
