        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefCharDefaultSkill extends Model
        {
            protected $table = '_RefCharDefault_Skill';
            public $timestamps = false;

            protected $fillable = [
                'Race', 'SkillID'
            ];

            protected $casts = [
                'Race' => 'integer',
        'SkillID' => 'integer',
    ];
        }