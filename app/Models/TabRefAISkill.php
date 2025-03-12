        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class TabRefAISkill extends Model
        {
            protected $table = 'Tab_RefAISkill';
            public $timestamps = false;

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