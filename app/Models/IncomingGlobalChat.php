<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IncomingGlobalChat extends Model
{
    public $timestamps = false;
    protected $table = '_IncomingGlobalChat';
    protected $fillable = [
        'ID', 'CharName', 'GlobalChat', 'Date'
    ];

    protected $casts = [
        'ID' => 'integer',
    ];
}
