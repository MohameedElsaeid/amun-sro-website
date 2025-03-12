        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefCharGen extends Model
        {
            protected $table = '_RefCharGen';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'RefObjID'
            ];

            protected $casts = [
                'Service' => 'integer',
        'RefObjID' => 'integer',
    ];
        }