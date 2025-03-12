<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharacterSkill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharacterSkill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharacterSkill query()
 * @mixin \Eloquent
 */
class CharacterSkill extends Model
{
    public $timestamps = false;
    protected $table = '_CharacterSkills';
    protected $fillable = [
        'SkillID', 'Build', 'Race', 'MasteryID'
    ];

    protected $casts = [
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
}
