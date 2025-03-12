<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefGameWorldConfig extends Model
{
    public $timestamps = false;
    protected $table = '_RefGame_World_Config';
    protected $fillable = [
        'Service', 'ID', 'GroupCodeName128', 'ValueCodeName128', 'Value', 'Type'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
    ];
}
