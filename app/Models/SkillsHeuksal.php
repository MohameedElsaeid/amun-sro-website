        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SkillsHeuksal extends Model
        {
            protected $table = '_SkillsHeuksal';
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