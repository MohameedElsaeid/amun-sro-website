<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiegeFortressStruct extends Model
{
    public $timestamps = false;
    protected $table = '_SiegeFortressStruct';
    protected $fillable = [
        'FortressID', 'OwnerGuildID', 'RefEventStructID', 'RefObjID', 'HP', 'MakeDate', 'State'
    ];

    protected $casts = [
        'FortressID' => 'integer',
        'OwnerGuildID' => 'integer',
        'RefEventStructID' => 'integer',
        'RefObjID' => 'integer',
        'HP' => 'integer',
        'MakeDate' => 'datetime',
        'State' => 'integer',
    ];
}
