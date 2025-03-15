<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsWarrior newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsWarrior newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsWarrior query()
 * @mixin \Eloquent
 */
class SkillsWarrior extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsWarrior';
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
