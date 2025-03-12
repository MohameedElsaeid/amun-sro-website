<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefTriggerBindAction extends Model
{
    public $timestamps = false;
    protected $table = '_RefTriggerBindAction';
    protected $fillable = [
        'Service', 'ID', 'TriggerID', 'TriggerActionID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'TriggerID' => 'integer',
        'TriggerActionID' => 'integer',
    ];
}
