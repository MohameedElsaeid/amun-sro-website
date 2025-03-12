<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CharacterSkill extends Model
{
    public $timestamps = false;
    protected $table = '_CharacterSkills';
    protected $fillable = [
        'SkillID', 'Build', 'Race', 'MasteryID'
    ];

    protected $casts = [
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
}
