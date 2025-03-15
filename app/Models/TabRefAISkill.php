<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefAISkill newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefAISkill newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|TabRefAISkill query()
 * @mixin \Eloquent
 */
class TabRefAISkill extends Model
{
    public $timestamps = false;
    protected $table = 'Tab_RefAISkill';
    protected $fillable = [
        'TacticsID', 'SkillCodeName', 'ExcuteConditionType', 'ExcuteConditionData', 'Option'
    ];

    protected $casts = [
        'TacticsID' => 'integer',
        'ExcuteConditionType' => 'integer',
        'ExcuteConditionData' => 'integer',
        'Option' => 'integer',
    ];
    protected $connection = 'proxy';
}
