<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TabDBSafeCheckState extends Model
{
    public $timestamps = false;
    protected $table = 'Tab_DBSafe_CheckState';
    protected $fillable = [
        'btCheckIn'
    ];

    protected $casts = [
        'btCheckIn' => 'integer',
    ];
}
