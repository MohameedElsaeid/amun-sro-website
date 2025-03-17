<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefCharDefaultSkillMastery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefCharDefaultSkillMastery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefCharDefaultSkillMastery query()
 * @mixin \Eloquent
 */
class RefCharDefaultSkillMastery extends Model
{
    public $timestamps = false;
    protected $table = '_RefCharDefault_SkillMastery';
    protected $fillable = [
        'Race', 'MasteryID'
    ];

    protected $casts = [
        'Race' => 'integer',
        'MasteryID' => 'integer',
    ];
    protected $connection = 'proxy';
}
