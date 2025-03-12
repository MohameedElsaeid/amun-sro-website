        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefTriggerCommon extends Model
        {
            protected $table = '_RefTriggerCommon';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'ID', 'CodeName128', 'ObjName128', 'TID1', 'TID2', 'TID3', 'TID4'
            ];

            protected $casts = [
                'Service' => 'integer',
        'ID' => 'integer',
        'TID1' => 'integer',
        'TID2' => 'integer',
        'TID3' => 'integer',
        'TID4' => 'integer',
    ];
        }