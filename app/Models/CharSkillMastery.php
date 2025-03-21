<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|CharSkillMastery newModelQuery()
 * @method static Builder<static>|CharSkillMastery newQuery()
 * @method static Builder<static>|CharSkillMastery query()
 * @mixin Eloquent
 */
class CharSkillMastery extends Model
{
    public $timestamps = false;
    protected $table = '_CharSkillMastery';
    protected $fillable = [
        'CharID', 'MasteryID', 'Level'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'MasteryID' => 'integer',
        'Level' => 'integer',
    ];
    protected $connection = 'proxy';
}
