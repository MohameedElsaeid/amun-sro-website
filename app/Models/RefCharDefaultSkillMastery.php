<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefCharDefaultSkillMastery newModelQuery()
 * @method static Builder<static>|RefCharDefaultSkillMastery newQuery()
 * @method static Builder<static>|RefCharDefaultSkillMastery query()
 * @mixin Eloquent
 */
class RefCharDefaultSkillMastery extends Model
{
    public $timestamps = false;
    protected $table = '_RefCharDefault_SkillMastery';
    protected $fillable = [
        'Race', 'MasteryID'
    ];

    protected $casts = [
        'Race' => 'integer',
        'MasteryID' => 'integer',
    ];
    protected $connection = 'proxy';
}
