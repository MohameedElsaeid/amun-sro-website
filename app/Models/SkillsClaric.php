<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|SkillsClaric newModelQuery()
 * @method static Builder<static>|SkillsClaric newQuery()
 * @method static Builder<static>|SkillsClaric query()
 * @mixin Eloquent
 */
class SkillsClaric extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsClaric';
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
