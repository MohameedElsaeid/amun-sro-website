        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefCountryNameAndCode extends Model
        {
            protected $table = '_RefCountryNameAndCode';
            public $timestamps = false;

            protected $fillable = [
                'code', 'szCountryName'
            ];

            protected $casts = [
            ];
        }