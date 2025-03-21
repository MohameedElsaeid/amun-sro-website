<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefCharDefaultSkill newModelQuery()
 * @method static Builder<static>|RefCharDefaultSkill newQuery()
 * @method static Builder<static>|RefCharDefaultSkill query()
 * @mixin Eloquent
 */
class RefCharDefaultSkill extends Model
{
    public $timestamps = false;
    protected $table = '_RefCharDefault_Skill';
    protected $fillable = [
        'Race', 'SkillID'
    ];

    protected $casts = [
        'Race' => 'integer',
        'SkillID' => 'integer',
    ];
    protected $connection = 'proxy';
}
