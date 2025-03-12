        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefFmnTidGroup extends Model
        {
            protected $table = '_RefFmnTidGroup';
            public $timestamps = false;

            protected $fillable = [
                'TidGroupID', 'TidGroupName'
            ];

            protected $casts = [
                'TidGroupID' => 'integer',
    ];
        }