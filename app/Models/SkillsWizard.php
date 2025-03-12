<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillsWizard extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsWizard';
    protected $fillable = [
        'Service', 'SkillID', 'SkillName', 'MasteryID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
}
