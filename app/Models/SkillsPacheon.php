<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillsPacheon extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsPacheon';
    protected $fillable = [
        'Service', 'SkillID', 'SkillName', 'MasteryID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
}
