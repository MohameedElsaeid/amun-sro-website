        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SkillsWarlock extends Model
        {
            protected $table = '_SkillsWarlock';
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