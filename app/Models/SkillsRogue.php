<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillsRogue extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsRogue';
    protected $fillable = [
        'Service', 'SkillID', 'SkillName', 'MasteryID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
}
