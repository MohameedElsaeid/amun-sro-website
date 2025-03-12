        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefDropClassSelReinforce extends Model
        {
            protected $table = '_RefDropClassSel_Reinforce';
            public $timestamps = false;

            protected $fillable = [
                'MonLevel', 'ProbGroup1', 'ProbGroup2'
            ];

            protected $casts = [
                'MonLevel' => 'integer',
        'ProbGroup1' => 'float',
        'ProbGroup2' => 'float',
    ];
        }