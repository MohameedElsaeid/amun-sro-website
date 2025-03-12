<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingCampHonorRank extends Model
{
    public $timestamps = false;
    protected $table = '_TrainingCampHonorRank';
    protected $fillable = [
        'Ranking', 'CampID', 'Rank'
    ];

    protected $casts = [
        'Ranking' => 'integer',
        'CampID' => 'integer',
        'Rank' => 'integer',
    ];
}
