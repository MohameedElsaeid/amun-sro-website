<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KillHistory extends Model
{
    public $timestamps = false;
    protected $table = '_KillHistory';
    protected $fillable = [
        'CharId', 'DeathCharId', 'CharLevel', 'DeathCharLevel', 'isJob', 'timestamp'
    ];

    protected $casts = [
        'CharId' => 'integer',
        'DeathCharId' => 'integer',
        'CharLevel' => 'integer',
        'DeathCharLevel' => 'integer',
        'isJob' => 'integer',
        'timestamp' => 'integer',
    ];
}
