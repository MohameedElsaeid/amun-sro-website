<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsWizard newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsWizard newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SkillsWizard query()
 * @mixin \Eloquent
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
