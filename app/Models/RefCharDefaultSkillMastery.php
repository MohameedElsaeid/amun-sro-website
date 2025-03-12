<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefCharDefaultSkillMastery extends Model
{
    public $timestamps = false;
    protected $table = '_RefCharDefault_SkillMastery';
    protected $fillable = [
        'Race', 'MasteryID'
    ];

    protected $casts = [
        'Race' => 'integer',
        'MasteryID' => 'integer',
    ];
}
