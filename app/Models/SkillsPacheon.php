<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsPacheon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsPacheon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsPacheon query()
 * @mixin \Eloquent
 */
class SkillsPacheon extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsPacheon';
    protected $fillable = [
        'Service', 'SkillID', 'SkillName', 'MasteryID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
}
