<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefObjStruct extends Model
{
    public $timestamps = false;
    protected $table = '_RefObjStruct';
    protected $fillable = [
        'ID', 'Dummy_Data'
    ];

    protected $casts = [
        'ID' => 'integer',
        'Dummy_Data' => 'integer',
    ];
}
