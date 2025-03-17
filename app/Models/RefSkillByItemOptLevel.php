<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSkillByItemOptLevel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSkillByItemOptLevel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RefSkillByItemOptLevel query()
 * @mixin \Eloquent
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
