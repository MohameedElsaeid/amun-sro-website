<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
