<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefTriggerCategoryBindTrigger extends Model
{
    public $timestamps = false;
    protected $table = '_RefTriggerCategoryBindTrigger';
    protected $fillable = [
        'Service', 'ID', 'TriggerCategoryID', 'TriggerID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'TriggerCategoryID' => 'integer',
        'TriggerID' => 'integer',
    ];
}
