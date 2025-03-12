<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CharNameList extends Model
{
    public $timestamps = false;
    protected $table = '_CharNameList';
    protected $fillable = [
        'CharName16', 'CharID'
    ];

    protected $casts = [
        'CharID' => 'integer',
    ];
}
