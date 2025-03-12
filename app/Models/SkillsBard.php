<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsBard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsBard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsBard query()
 * @mixin \Eloquent
 */
class SkillsBard extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsBard';
    protected $fillable = [
        'Service', 'SkillID', 'SkillName', 'MasteryID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
}
