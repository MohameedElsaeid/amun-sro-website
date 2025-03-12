        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SkillsClaric extends Model
        {
            protected $table = '_SkillsClaric';
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