<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|CharacterSkill newModelQuery()
 * @method static Builder<static>|CharacterSkill newQuery()
 * @method static Builder<static>|CharacterSkill query()
 * @mixin Eloquent
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
    protected $connection = 'log';
}
