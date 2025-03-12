        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SiegeFortressStruct extends Model
        {
            protected $table = '_SiegeFortressStruct';
            public $timestamps = false;

            protected $fillable = [
                'FortressID', 'OwnerGuildID', 'RefEventStructID', 'RefObjID', 'HP', 'MakeDate', 'State'
            ];

            protected $casts = [
                'FortressID' => 'integer',
        'OwnerGuildID' => 'integer',
        'RefEventStructID' => 'integer',
        'RefObjID' => 'integer',
        'HP' => 'integer',
        'MakeDate' => 'datetime',
        'State' => 'integer',
    ];
        }