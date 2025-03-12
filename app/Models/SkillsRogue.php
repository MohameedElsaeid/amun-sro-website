<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsRogue newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsRogue newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsRogue query()
 * @mixin \Eloquent
 */
class SkillsRogue extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsRogue';
    protected $fillable = [
        'Service', 'SkillID', 'SkillName', 'MasteryID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
}
