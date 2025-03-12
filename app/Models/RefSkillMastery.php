<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefSkillMastery extends Model
{
    public $timestamps = false;
    protected $table = '_RefSkillMastery';
    protected $fillable = [
        'ID', 'Code', 'Weapon'
    ];

    protected $casts = [
        'ID' => 'integer',
        'Weapon' => 'integer',
    ];
}
