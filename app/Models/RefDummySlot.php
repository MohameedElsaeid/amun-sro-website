<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefDummySlot extends Model
{
    public $timestamps = false;
    protected $table = '_RefDummySlot';
    protected $fillable = [
        'cnt'
    ];

    protected $casts = [
        'cnt' => 'integer',
    ];
}
