        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefAbilityByItemOptLevel extends Model
        {
            protected $table = '_RefAbilityByItemOptLevel';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'ID', 'RefItemID', 'ItemOptLevel'
            ];

            protected $casts = [
                'Service' => 'integer',
        'ID' => 'integer',
        'RefItemID' => 'integer',
        'ItemOptLevel' => 'integer',
    ];
        }