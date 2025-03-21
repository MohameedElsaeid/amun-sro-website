<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|SkillsForce newModelQuery()
 * @method static Builder<static>|SkillsForce newQuery()
 * @method static Builder<static>|SkillsForce query()
 * @mixin Eloquent
 */
class SkillsForce extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsForce';
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
