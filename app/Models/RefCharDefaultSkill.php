<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefCharDefaultSkill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefCharDefaultSkill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefCharDefaultSkill query()
 * @mixin \Eloquent
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
