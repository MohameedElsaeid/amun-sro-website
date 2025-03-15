<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsLightning newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsLightning newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsLightning query()
 * @mixin \Eloquent
 */
class SkillsLightning extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsLightning';
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
