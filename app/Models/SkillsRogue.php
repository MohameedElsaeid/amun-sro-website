        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SkillsRogue extends Model
        {
            protected $table = '_SkillsRogue';
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