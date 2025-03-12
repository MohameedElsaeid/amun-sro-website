<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillsBard extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsBard';
    protected $fillable = [
        'Service', 'SkillID', 'SkillName', 'MasteryID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
}
