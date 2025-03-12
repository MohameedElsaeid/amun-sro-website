<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefEvent extends Model
{
    public $timestamps = false;
    protected $table = '_RefEvent';
    protected $fillable = [
        'Service', 'ID', 'CodeName', 'DescName', 'ScheduleName', 'ScheduleCount'
    ];

    protected $casts = [
        'Service' => 'integer',
        'ID' => 'integer',
        'ScheduleCount' => 'integer',
    ];
}
