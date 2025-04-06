<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|SkillsCold newModelQuery()
 * @method static Builder<static>|SkillsCold newQuery()
 * @method static Builder<static>|SkillsCold query()
 * @mixin Eloquent
 */
class SkillsCold extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsCold';
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
