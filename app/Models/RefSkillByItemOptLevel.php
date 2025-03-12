<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RefSkillByItemOptLevel extends Model
{
    public $timestamps = false;
    protected $table = '_RefSkillByItemOptLevel';
    protected $fillable = [
        'Link', 'RefSkillID'
    ];

    protected $casts = [
        'Link' => 'integer',
        'RefSkillID' => 'integer',
    ];
}
