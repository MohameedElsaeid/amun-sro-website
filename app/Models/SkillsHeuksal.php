<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SkillsHeuksal extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsHeuksal';
    protected $fillable = [
        'Service', 'SkillID', 'SkillName', 'MasteryID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
}
