<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSkillGroup newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSkillGroup newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSkillGroup query()
 * @mixin \Eloquent
 */
class RefSkillGroup extends Model
{
    public $timestamps = false;
    protected $table = '_RefSkillGroup';
    protected $fillable = [
        'ID', 'Code'
    ];

    protected $casts = [
        'ID' => 'integer',
    ];
    protected $connection = 'proxy';
}
