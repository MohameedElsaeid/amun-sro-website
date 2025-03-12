<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefTriggerEvent extends Model
{
    public $timestamps = false;
    protected $table = '_RefTriggerEvent';
    protected $fillable = [
        'Service', 'ID', 'RefTriggerCommonID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'RefTriggerCommonID' => 'integer',
    ];
}
