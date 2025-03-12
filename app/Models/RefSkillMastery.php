        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefSkillMastery extends Model
        {
            protected $table = '_RefSkillMastery';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'Code', 'Weapon'
            ];

            protected $casts = [
                'ID' => 'integer',
        'Weapon' => 'integer',
    ];
        }