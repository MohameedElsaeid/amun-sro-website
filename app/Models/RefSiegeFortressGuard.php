<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefSiegeFortressGuard extends Model
{
    public $timestamps = false;
    protected $table = '_RefSiegeFortressGuard';
    protected $fillable = [
        'Service', 'FortressID', 'GuardRefObjID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'FortressID' => 'integer',
        'GuardRefObjID' => 'integer',
    ];
}
