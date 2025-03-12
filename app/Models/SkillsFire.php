<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillsFire extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsFire';
    protected $fillable = [
        'Service', 'SkillID', 'SkillName', 'MasteryID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
}
