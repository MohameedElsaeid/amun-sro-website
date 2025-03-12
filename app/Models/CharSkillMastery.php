<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CharSkillMastery extends Model
{
    public $timestamps = false;
    protected $table = '_CharSkillMastery';
    protected $fillable = [
        'CharID', 'MasteryID', 'Level'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'MasteryID' => 'integer',
        'Level' => 'integer',
    ];
}
