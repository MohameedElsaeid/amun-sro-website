<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillsLightning extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsLightning';
    protected $fillable = [
        'Service', 'SkillID', 'SkillName', 'MasteryID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
}
