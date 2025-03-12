        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefGameWorldBindTriggerCategory extends Model
        {
            protected $table = '_RefGameWorldBindTriggerCategory';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'ID', 'GameWorldID', 'TriggerCategoryID'
            ];

            protected $casts = [
                'Service' => 'integer',
        'ID' => 'integer',
        'GameWorldID' => 'integer',
        'TriggerCategoryID' => 'integer',
    ];
        }