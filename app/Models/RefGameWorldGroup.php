<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefGameWorldGroup extends Model
{
    public $timestamps = false;
    protected $table = '_RefGameWorldGroup';
    protected $fillable = [
        'ID', 'CodeName128', 'ObjName128', 'ConfigGroupCodeName128'
    ];

    protected $casts = [
        'ID' => 'integer',
    ];
}
