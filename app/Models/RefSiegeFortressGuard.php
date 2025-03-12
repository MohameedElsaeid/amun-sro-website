        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefSiegeFortressGuard extends Model
        {
            protected $table = '_RefSiegeFortressGuard';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'FortressID', 'GuardRefObjID'
            ];

            protected $casts = [
                'Service' => 'integer',
        'FortressID' => 'integer',
        'GuardRefObjID' => 'integer',
    ];
        }