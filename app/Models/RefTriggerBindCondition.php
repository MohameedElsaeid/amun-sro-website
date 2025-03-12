<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefTriggerBindCondition extends Model
{
    public $timestamps = false;
    protected $table = '_RefTriggerBindCondition';
    protected $fillable = [
        'Service', 'ID', 'TriggerID', 'TriggerConditionID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'TriggerID' => 'integer',
        'TriggerConditionID' => 'integer',
    ];
}
