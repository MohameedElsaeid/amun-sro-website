<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|SkillsBard newModelQuery()
 * @method static Builder<static>|SkillsBard newQuery()
 * @method static Builder<static>|SkillsBard query()
 * @mixin Eloquent
 */
class SkillsBard extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsBard';
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
