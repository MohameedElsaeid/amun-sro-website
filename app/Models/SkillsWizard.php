        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SkillsWizard extends Model
        {
            protected $table = '_SkillsWizard';
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