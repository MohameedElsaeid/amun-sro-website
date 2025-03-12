<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefTriggerActionParam extends Model
{
    public $timestamps = false;
    protected $table = '_RefTriggerActionParam';
    protected $fillable = [
        'Service', 'ID', 'GroupCodeName128', 'ValueCodeName128', 'Value', 'Type'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
    ];
}
