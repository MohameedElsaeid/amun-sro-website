<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|SkillsBicheon newModelQuery()
 * @method static Builder<static>|SkillsBicheon newQuery()
 * @method static Builder<static>|SkillsBicheon query()
 * @mixin Eloquent
 */
class SkillsBicheon extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsBicheon';
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
