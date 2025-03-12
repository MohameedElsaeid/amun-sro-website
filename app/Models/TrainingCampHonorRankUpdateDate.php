<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingCampHonorRankUpdateDate extends Model
{
    public $timestamps = false;
    protected $table = '_TrainingCampHonorRankUpdateDate';
    protected $fillable = [
        'LastUpdateDate'
    ];

    protected $casts = [
        'LastUpdateDate' => 'datetime',
    ];
}
