<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KillDeathCounter extends Model
{
    public $timestamps = false;
    protected $table = '_KillDeathCounter';
    protected $fillable = [
        'CharId', 'deaths', 'kills', 'code', 'timestamp'
    ];

    protected $casts = [
        'CharId' => 'integer',
        'deaths' => 'integer',
        'kills' => 'integer',
        'timestamp' => 'integer',
    ];
}
