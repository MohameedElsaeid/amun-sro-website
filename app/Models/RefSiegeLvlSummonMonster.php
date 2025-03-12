<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefSiegeLvlSummonMonster extends Model
{
    public $timestamps = false;
    protected $table = '_RefSiegeLvlSummonMonster';
    protected $fillable = [
        'Service', 'RefObjID', 'RefOrgObjID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'RefObjID' => 'integer',
        'RefOrgObjID' => 'integer',
    ];
}
