<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefTriggerVariable extends Model
{
    public $timestamps = false;
    protected $table = '_RefTriggerVariable';
    protected $fillable = [
        'Service', 'ID', 'BindTriggerID', 'CodeName128', 'Type', 'Value', 'Comment128'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'BindTriggerID' => 'integer',
        'Value' => 'integer',
    ];
}
