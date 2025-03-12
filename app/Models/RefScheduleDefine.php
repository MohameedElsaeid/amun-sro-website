<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefScheduleDefine extends Model
{
    public $timestamps = false;
    protected $table = '_RefScheduleDefine';
    protected $fillable = [
        'ScheduleDefineIdx', 'ScheduleName', 'Description'
    ];

    protected $casts = [
        'ScheduleDefineIdx' => 'integer',
    ];
}
