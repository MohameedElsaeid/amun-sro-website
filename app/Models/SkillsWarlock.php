<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsWarlock newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsWarlock newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsWarlock query()
 * @mixin \Eloquent
 */
class SkillsWarlock extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsWarlock';
    protected $fillable = [
        'Service', 'SkillID', 'SkillName', 'MasteryID'
    ];

    protected $casts = [
        'Service' => 'integer',
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
    protected $connection = 'log';
}
