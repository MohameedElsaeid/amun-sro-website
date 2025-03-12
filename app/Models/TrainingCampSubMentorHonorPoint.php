<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingCampSubMentorHonorPoint extends Model
{
    public $timestamps = false;
    protected $table = '_TrainingCampSubMentorHonorPoint';
    protected $fillable = [
        'CharID', 'HonorPoint'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'HonorPoint' => 'integer',
    ];
}
