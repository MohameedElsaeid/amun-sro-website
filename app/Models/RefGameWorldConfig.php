        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefGameWorldConfig extends Model
        {
            protected $table = '_RefGame_World_Config';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'ID', 'GroupCodeName128', 'ValueCodeName128', 'Value', 'Type'
            ];

            protected $casts = [
                'Service' => 'integer',
        'ID' => 'integer',
    ];
        }