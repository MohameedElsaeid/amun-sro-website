<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsBicheon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsBicheon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsBicheon query()
 * @mixin \Eloquent
 */
class SkillsBicheon extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsBicheon';
    protected $fillable = [
        'Service', 'SkillID', 'SkillName', 'MasteryID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
}
