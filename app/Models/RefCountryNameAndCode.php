<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefCountryNameAndCode extends Model
{
    public $timestamps = false;
    protected $table = '_RefCountryNameAndCode';
    protected $fillable = [
        'code', 'szCountryName'
    ];

    protected $casts = [
    ];
}
