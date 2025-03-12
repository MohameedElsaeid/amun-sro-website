<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillsClaric extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsClaric';
    protected $fillable = [
        'Service', 'SkillID', 'SkillName', 'MasteryID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
}
