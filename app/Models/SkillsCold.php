        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SkillsCold extends Model
        {
            protected $table = '_SkillsCold';
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