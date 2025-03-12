<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefSkillGroup extends Model
{
    public $timestamps = false;
    protected $table = '_RefSkillGroup';
    protected $fillable = [
        'ID', 'Code'
    ];

    protected $casts = [
        'ID' => 'integer',
    ];
}
