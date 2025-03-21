<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|SkillsWarlock newModelQuery()
 * @method static Builder<static>|SkillsWarlock newQuery()
 * @method static Builder<static>|SkillsWarlock query()
 * @mixin Eloquent
 */
class SkillsWarlock extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsWarlock';
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
