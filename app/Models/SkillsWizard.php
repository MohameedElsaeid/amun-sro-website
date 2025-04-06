<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @method static Builder<static>|SkillsWizard newModelQuery()
 * @method static Builder<static>|SkillsWizard newQuery()
 * @method static Builder<static>|SkillsWizard query()
 * @mixin Eloquent
 */
class SkillsWizard extends Model
{
    public $timestamps = false;
    protected $table = '_SkillsWizard';
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
