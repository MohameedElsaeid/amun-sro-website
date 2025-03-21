<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|SkillsHeuksal newModelQuery()
 * @method static Builder<static>|SkillsHeuksal newQuery()
 * @method static Builder<static>|SkillsHeuksal query()
 * @mixin Eloquent
 */
class SkillsHeuksal extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsHeuksal';
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
