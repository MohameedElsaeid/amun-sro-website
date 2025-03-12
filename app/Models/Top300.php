<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Top300 extends Model
{
    public $timestamps = false;
    protected $table = '_Top300';
    protected $fillable = [
        'CharID', 'Data2'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'Data2' => 'integer',
    ];
}
