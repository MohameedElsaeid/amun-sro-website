<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IncomingPrivateChat extends Model
{
    public $timestamps = false;
    protected $table = '_IncomingPrivateChat';
    protected $fillable = [
        'ID', 'CharName', 'Chat', 'Date'
    ];

    protected $casts = [
        'ID' => 'integer',
    ];
}
