<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefCharGen extends Model
{
    public $timestamps = false;
    protected $table = '_RefCharGen';
    protected $fillable = [
        'Service', 'RefObjID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'RefObjID' => 'integer',
    ];
}
