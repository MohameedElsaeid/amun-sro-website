<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharSkill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharSkill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharSkill query()
 * @mixin \Eloquent
 */
class CharSkill extends Model
{
    public $timestamps = false;
    protected $table = '_CharSkill';
    protected $fillable = [
        'CharID', 'SkillID', 'Enable'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'SkillID' => 'integer',
        'Enable' => 'integer',
    ];
}
