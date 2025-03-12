        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefDropClassSelScroll extends Model
        {
            protected $table = '_RefDropClassSel_Scroll';
            public $timestamps = false;

            protected $fillable = [
                'MonLevel', 'ProbGroup1', 'ProbGroup2', 'ProbGroup3'
            ];

            protected $casts = [
                'MonLevel' => 'integer',
        'ProbGroup1' => 'float',
        'ProbGroup2' => 'float',
        'ProbGroup3' => 'float',
    ];
        }