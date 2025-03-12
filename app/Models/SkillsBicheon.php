<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillsBicheon extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsBicheon';
    protected $fillable = [
        'Service', 'SkillID', 'SkillName', 'MasteryID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
}
