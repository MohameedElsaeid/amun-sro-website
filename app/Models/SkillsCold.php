<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillsCold extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsCold';
    protected $fillable = [
        'Service', 'SkillID', 'SkillName', 'MasteryID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
}
