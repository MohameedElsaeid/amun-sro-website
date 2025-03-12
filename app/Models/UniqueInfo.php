<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniqueInfo extends Model
{
    public $timestamps = false;
    protected $table = '_UniqueInfo';
    protected $fillable = [
        'CodeName128', 'Name', 'Point'
    ];

    protected $casts = [
        'Point' => 'integer',
    ];
}
