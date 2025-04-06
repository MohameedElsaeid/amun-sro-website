<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|CharSkill newModelQuery()
 * @method static Builder<static>|CharSkill newQuery()
 * @method static Builder<static>|CharSkill query()
 * @mixin Eloquent
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
    protected $connection = 'proxy';
}
