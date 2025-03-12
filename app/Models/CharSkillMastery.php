        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class CharSkillMastery extends Model
        {
            protected $table = '_CharSkillMastery';
            public $timestamps = false;

            protected $fillable = [
                'CharID', 'MasteryID', 'Level'
            ];

            protected $casts = [
                'CharID' => 'integer',
        'MasteryID' => 'integer',
        'Level' => 'integer',
    ];
        }