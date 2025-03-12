        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SiegeFortressObject extends Model
        {
            protected $table = '_SiegeFortressObject';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'FortressID', 'OwnerGuildID', 'RefObjID', 'HP', 'Region', 'PosX', 'PosY', 'PosZ', 'Direction', 'OwnerLevel'
            ];

            protected $casts = [
                'ID' => 'integer',
        'FortressID' => 'integer',
        'OwnerGuildID' => 'integer',
        'RefObjID' => 'integer',
        'HP' => 'integer',
        'Region' => 'integer',
        'PosX' => 'float',
        'PosY' => 'float',
        'PosZ' => 'float',
        'Direction' => 'float',
        'OwnerLevel' => 'integer',
    ];
        }