<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TEMPADDITEMEXTERNCHESTLOG extends Model
{
    public $timestamps = false;
    protected $table = '_TEMP_ADDITEMEXTERN_CHEST_LOG';
    protected $fillable = [
        'ID', 'LogString', 'LogDate'
    ];

    protected $casts = [
        'ID' => 'integer',
        'LogDate' => 'datetime',
    ];
}
