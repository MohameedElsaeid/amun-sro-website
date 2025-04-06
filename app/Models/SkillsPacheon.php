<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|SkillsPacheon newModelQuery()
 * @method static Builder<static>|SkillsPacheon newQuery()
 * @method static Builder<static>|SkillsPacheon query()
 * @mixin Eloquent
 */
class SkillsPacheon extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsPacheon';
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
