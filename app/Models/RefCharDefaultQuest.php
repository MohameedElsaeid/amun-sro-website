        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefCharDefaultQuest extends Model
        {
            protected $table = '_RefCharDefault_Quest';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'ID', 'Race', 'CodeName', 'RequiredLevel'
            ];

            protected $casts = [
                'Service' => 'integer',
        'ID' => 'integer',
        'Race' => 'integer',
        'RequiredLevel' => 'integer',
    ];
        }