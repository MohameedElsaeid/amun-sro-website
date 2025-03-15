<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SrcmsSetting extends Model
{
    public $timestamps = false;
    protected $table = 'srcms_settings';
    protected $fillable = [
        'value', 'valueName'
    ];

    protected $casts = [
    ];
    protected $connection = 'sqlsrv';
}
