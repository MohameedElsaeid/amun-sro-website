        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefFmnTidGroupMap extends Model
        {
            protected $table = '_RefFmnTidGroupMap';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'TidGroupID', 'TypeID1', 'TypeID2', 'TypeID3', 'TypeID4'
            ];

            protected $casts = [
                'Service' => 'integer',
        'TidGroupID' => 'integer',
        'TypeID1' => 'integer',
        'TypeID2' => 'integer',
        'TypeID3' => 'integer',
        'TypeID4' => 'integer',
    ];
        }