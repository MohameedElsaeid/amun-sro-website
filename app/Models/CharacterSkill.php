        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class CharacterSkill extends Model
        {
            protected $table = '_CharacterSkills';
            public $timestamps = false;

            protected $fillable = [
                'SkillID', 'Build', 'Race', 'MasteryID'
            ];

            protected $casts = [
                'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
        }