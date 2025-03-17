<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SrcmsEpin extends Model
{
    public $timestamps = false;
    protected $table = 'srcms_epin';
    protected $fillable = [
        'code', 'silkAmount'
    ];

    protected $casts = [
        'code' => 'integer',
        'silkAmount' => 'integer',
    ];
    protected $connection = 'sqlsrv';
}
