        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SkillsFire extends Model
        {
            protected $table = '_SkillsFire';
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