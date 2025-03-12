<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharSkillMastery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharSkillMastery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|CharSkillMastery query()
 * @mixin \Eloquent
 */
class CharSkillMastery extends Model
{
    public $timestamps = false;
    protected $table = '_CharSkillMastery';
    protected $fillable = [
        'CharID', 'MasteryID', 'Level'
    ];

    protected $casts = [
        'CharID' => 'integer',
        'MasteryID' => 'integer',
        'Level' => 'integer',
    ];
}
