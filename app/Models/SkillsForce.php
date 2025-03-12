<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillsForce extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsForce';
    protected $fillable = [
        'Service', 'SkillID', 'SkillName', 'MasteryID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
}
