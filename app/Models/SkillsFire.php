<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsFire newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsFire newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsFire query()
 * @mixin \Eloquent
 */
class SkillsFire extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsFire';
    protected $fillable = [
        'Service', 'SkillID', 'SkillName', 'MasteryID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
}
