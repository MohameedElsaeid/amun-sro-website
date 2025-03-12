<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CharSkill extends Model
{
    public $timestamps = false;
    protected $table = '_CharSkill';
    protected $fillable = [
        'CharID', 'SkillID', 'Enable'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'SkillID' => 'integer',
        'Enable' => 'integer',
    ];
}
