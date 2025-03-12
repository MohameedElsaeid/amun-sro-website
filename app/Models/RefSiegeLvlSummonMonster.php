        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefSiegeLvlSummonMonster extends Model
        {
            protected $table = '_RefSiegeLvlSummonMonster';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'RefObjID', 'RefOrgObjID'
            ];

            protected $casts = [
                'Service' => 'integer',
        'RefObjID' => 'integer',
        'RefOrgObjID' => 'integer',
    ];
        }