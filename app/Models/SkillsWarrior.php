        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SkillsWarrior extends Model
        {
            protected $table = '_SkillsWarrior';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'SkillID', 'SkillName', 'MasteryID'
            ];

            protected $casts = [
                'Service' => 'integer',
        'SkillID' => 'integer',
        'MasteryID' => 'integer',
    ];
        }