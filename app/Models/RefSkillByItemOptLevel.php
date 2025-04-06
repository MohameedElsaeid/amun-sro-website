<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|RefSkillByItemOptLevel newModelQuery()
 * @method static Builder<static>|RefSkillByItemOptLevel newQuery()
 * @method static Builder<static>|RefSkillByItemOptLevel query()
 * @mixin Eloquent
 */
class RefSkillByItemOptLevel extends Model
{
    public $timestamps = false;
    protected $table = '_RefSkillByItemOptLevel';
    protected $fillable = [
        'Link', 'RefSkillID'
    ];

    protected $casts = [
        'Link' => 'integer',
        'RefSkillID' => 'integer',
    ];
    protected $connection = 'proxy';
}
