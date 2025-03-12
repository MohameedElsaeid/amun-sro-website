        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefObjStruct extends Model
        {
            protected $table = '_RefObjStruct';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'Dummy_Data'
            ];

            protected $casts = [
                'ID' => 'integer',
        'Dummy_Data' => 'integer',
    ];
        }