<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillsWarrior extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsWarrior';
    protected $fillable = [
        'Service', 'SkillID', 'SkillName', 'MasteryID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
}
