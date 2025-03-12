        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SkillsForce extends Model
        {
            protected $table = '_SkillsForce';
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