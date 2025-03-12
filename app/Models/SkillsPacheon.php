        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SkillsPacheon extends Model
        {
            protected $table = '_SkillsPacheon';
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