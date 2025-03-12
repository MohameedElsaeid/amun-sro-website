<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsCold newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsCold newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsCold query()
 * @mixin \Eloquent
 */
class SkillsCold extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsCold';
    protected $fillable = [
        'Service', 'SkillID', 'SkillName', 'MasteryID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
}
