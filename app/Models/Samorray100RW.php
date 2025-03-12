<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Samorray100RW extends Model
{
    public $timestamps = false;
    protected $table = '_Samorray_100_RW';
    protected $fillable = [
        'CharID', 'CurLevel', 'Charname', 'charjid', 'hwid'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'CurLevel' => 'integer',
        'charjid' => 'integer',
    ];
}
