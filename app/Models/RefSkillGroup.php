<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefSkillGroup newModelQuery()
 * @method static Builder<static>|RefSkillGroup newQuery()
 * @method static Builder<static>|RefSkillGroup query()
 * @mixin Eloquent
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
