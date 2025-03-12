        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SkillsLightning extends Model
        {
            protected $table = '_SkillsLightning';
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