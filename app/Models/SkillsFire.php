<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|SkillsFire newModelQuery()
 * @method static Builder<static>|SkillsFire newQuery()
 * @method static Builder<static>|SkillsFire query()
 * @mixin Eloquent
 */
class SkillsFire extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsFire';
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
