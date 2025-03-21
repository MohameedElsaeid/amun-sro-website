<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|SkillsWarrior newModelQuery()
 * @method static Builder<static>|SkillsWarrior newQuery()
 * @method static Builder<static>|SkillsWarrior query()
 * @mixin Eloquent
 */
class SkillsWarrior extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsWarrior';
    protected $fillable = [
        'Service', 'SkillID', 'SkillName', 'MasteryID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
    protected $connection = 'log';
}
