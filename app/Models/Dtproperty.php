<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dtproperty extends Model
{
    public $timestamps = false;
    protected $table = 'dtproperties';
    protected $fillable = [
        'objectid', 'property', 'value', 'uvalue', 'lvalue', 'version'
    ];

    protected $casts = [
        'objectid' => 'integer',
        'version' => 'integer',
    ];
    protected $connection = 'sqlsrv';
}
