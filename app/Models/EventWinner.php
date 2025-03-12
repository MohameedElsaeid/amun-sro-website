<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventWinner extends Model
{
    public $timestamps = false;
    protected $table = 'EventWinners';
    protected $fillable = [
        'CharId', 'EventName', 'Wins'
    ];

    protected $casts = [
        'Wins' => 'integer',
    ];
}
