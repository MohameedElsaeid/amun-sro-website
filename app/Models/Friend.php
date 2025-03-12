<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    public $timestamps = false;
    protected $table = '_Friend';
    protected $fillable = [
        'CharID', 'FriendCharID', 'FriendCharName', 'RefObjID'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'FriendCharID' => 'integer',
        'RefObjID' => 'integer',
    ];
}
