<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsForce newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsForce newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsForce query()
 * @mixin \Eloquent
 */
class SkillsForce extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsForce';
    protected $fillable = [
        'Service', 'SkillID', 'SkillName', 'MasteryID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
}
