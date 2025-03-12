        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class CharSkill extends Model
        {
            protected $table = '_CharSkill';
            public $timestamps = false;

            protected $fillable = [
                'CharID', 'SkillID', 'Enable'
            ];

            protected $casts = [
                'CharID' => 'integer',
        'SkillID' => 'integer',
        'Enable' => 'integer',
    ];
        }