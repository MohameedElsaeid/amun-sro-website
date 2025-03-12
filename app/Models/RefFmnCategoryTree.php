        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefFmnCategoryTree extends Model
        {
            protected $table = '_RefFmnCategoryTree';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'CategoryName', 'StringID', 'ParentCategoryName', 'TidGroupID', 'Degree'
            ];

            protected $casts = [
                'Service' => 'integer',
        'TidGroupID' => 'integer',
        'Degree' => 'integer',
    ];
        }