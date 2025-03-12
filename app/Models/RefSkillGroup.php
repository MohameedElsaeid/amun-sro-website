        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefSkillGroup extends Model
        {
            protected $table = '_RefSkillGroup';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'Code'
            ];

            protected $casts = [
                'ID' => 'integer',
    ];
        }