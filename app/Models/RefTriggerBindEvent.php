<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefTriggerBindEvent extends Model
{
    public $timestamps = false;
    protected $table = '_RefTriggerBindEvent';
    protected $fillable = [
        'Service', 'ID', 'TriggerID', 'TriggerEventID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'TriggerID' => 'integer',
        'TriggerEventID' => 'integer',
    ];
}
