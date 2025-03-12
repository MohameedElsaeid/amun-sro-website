        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefCharDefaultSkillMastery extends Model
        {
            protected $table = '_RefCharDefault_SkillMastery';
            public $timestamps = false;

            protected $fillable = [
                'Race', 'MasteryID'
            ];

            protected $casts = [
                'Race' => 'integer',
        'MasteryID' => 'integer',
    ];
        }