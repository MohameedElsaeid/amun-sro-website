<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WriteOutResetPlayTime extends Model
{
    public $timestamps = false;
    protected $table = '_WriteOutResetPlayTime';
    protected $fillable = [
        'LatestResetTime'
    ];

    protected $casts = [
        'LatestResetTime' => 'integer',
    ];
    protected $connection = 'sqlsrv';
}
