<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SystemService extends Model
{
    public $timestamps = false;
    protected $table = 'SystemService';
    protected $fillable = [
        'ID', 'Service', 'Run', 'Type', 'SystemName'
    ];

    protected $casts = [
        'ID' => 'integer',
        'Service' => 'integer',
    ];
}
