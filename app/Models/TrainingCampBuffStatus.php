<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingCampBuffStatus extends Model
{
    public $timestamps = false;
    protected $table = '_TrainingCampBuffStatus';
    protected $fillable = [
        'CampID', 'RecipientCharID', 'BuffSlotIdx', 'DonorCharID', 'StartingTime', 'RemainBuffPoint', 'BuffType'
    ];

    protected $casts = [
        'CampID' => 'integer',
        'RecipientCharID' => 'integer',
        'BuffSlotIdx' => 'integer',
        'DonorCharID' => 'integer',
        'StartingTime' => 'datetime',
        'RemainBuffPoint' => 'integer',
        'BuffType' => 'integer',
    ];
}
