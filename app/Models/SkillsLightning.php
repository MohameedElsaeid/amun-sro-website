<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|SkillsLightning newModelQuery()
 * @method static Builder<static>|SkillsLightning newQuery()
 * @method static Builder<static>|SkillsLightning query()
 * @mixin Eloquent
 */
class SkillsLightning extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsLightning';
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
