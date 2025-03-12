<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlackNameList extends Model
{
    public $timestamps = false;
    protected $table = '_BlackNameList';
    protected $fillable = [
        'BlacklistName'
    ];

    protected $casts = [
    ];
}
