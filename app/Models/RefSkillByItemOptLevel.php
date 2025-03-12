        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefSkillByItemOptLevel extends Model
        {
            protected $table = '_RefSkillByItemOptLevel';
            public $timestamps = false;

            protected $fillable = [
                'Link', 'RefSkillID'
            ];

            protected $casts = [
                'Link' => 'integer',
        'RefSkillID' => 'integer',
    ];
        }