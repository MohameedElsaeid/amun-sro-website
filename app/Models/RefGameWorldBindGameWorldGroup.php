        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefGameWorldBindGameWorldGroup extends Model
        {
            protected $table = '_RefGameWorldBindGameWorldGroup';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'ID', 'GameWorldID', 'GameWorldGroupID'
            ];

            protected $casts = [
                'Service' => 'integer',
        'ID' => 'integer',
        'GameWorldID' => 'integer',
        'GameWorldGroupID' => 'integer',
    ];
        }