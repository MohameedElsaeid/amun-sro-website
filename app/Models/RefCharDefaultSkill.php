<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefCharDefaultSkill extends Model
{
    public $timestamps = false;
    protected $table = '_RefCharDefault_Skill';
    protected $fillable = [
        'Race', 'SkillID'
    ];

    protected $casts = [
        'Race' => 'integer',
        'SkillID' => 'integer',
    ];
}
