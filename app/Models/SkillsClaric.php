<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsClaric newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsClaric newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsClaric query()
 * @mixin \Eloquent
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
