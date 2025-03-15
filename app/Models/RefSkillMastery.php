<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSkillMastery newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSkillMastery newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSkillMastery query()
 * @mixin \Eloquent
 */
class RefSkillMastery extends Model
{
    public $timestamps = false;
    protected $table = '_RefSkillMastery';
    protected $fillable = [
        'ID', 'Code', 'Weapon'
    ];

    protected $casts = [
        'ID' => 'integer',
        'Weapon' => 'integer',
    ];
    protected $connection = 'proxy';
}
