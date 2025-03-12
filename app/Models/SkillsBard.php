        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SkillsBard extends Model
        {
            protected $table = '_SkillsBard';
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