<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UniqueKillList extends Model
{
    public $timestamps = false;
    protected $table = '_UniqueKillList';
    protected $fillable = [
        'ID', 'CharID', 'CodeName128', 'time'
    ];

    protected $casts = [
        'ID' => 'integer',
        'CharID' => 'integer',
        'time' => 'datetime',
    ];
}
