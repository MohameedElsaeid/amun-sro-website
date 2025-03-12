        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SkillsBicheon extends Model
        {
            protected $table = '_SkillsBicheon';
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