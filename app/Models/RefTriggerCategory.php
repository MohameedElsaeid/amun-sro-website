<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefTriggerCategory extends Model
{
    public $timestamps = false;
    protected $table = '_RefTriggerCategory';
    protected $fillable = [
        'Service', 'ID', 'CodeName128', 'ObjName128', 'IndexNumber'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'IndexNumber' => 'integer',
    ];
}
