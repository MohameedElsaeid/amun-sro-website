<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillsWarlock extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsWarlock';
    protected $fillable = [
        'Service', 'SkillID', 'SkillName', 'MasteryID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
}
