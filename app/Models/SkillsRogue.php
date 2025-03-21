<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|SkillsRogue newModelQuery()
 * @method static Builder<static>|SkillsRogue newQuery()
 * @method static Builder<static>|SkillsRogue query()
 * @mixin Eloquent
 */
class SkillsRogue extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsRogue';
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
