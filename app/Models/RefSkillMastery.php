<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefSkillMastery newModelQuery()
 * @method static Builder<static>|RefSkillMastery newQuery()
 * @method static Builder<static>|RefSkillMastery query()
 * @mixin Eloquent
 */
class RefSkillMastery extends Model
{
    public $timestamps = false;
    protected $table = '_RefSkillMastery';
    protected $fillable = [
        'ID', 'Code', 'Weapon'
    ];

    protected $casts = [
        'ID' => 'integer',
        'Weapon' => 'integer',
    ];
    protected $connection = 'proxy';
}
