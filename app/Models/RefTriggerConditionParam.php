<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefTriggerConditionParam extends Model
{
    public $timestamps = false;
    protected $table = '_RefTriggerConditionParam';
    protected $fillable = [
        'Service', 'ID', 'GroupCodeName128', 'ValueCodeName128', 'Value', 'Type'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
    ];
}
