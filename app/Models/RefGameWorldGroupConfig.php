        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefGameWorldGroupConfig extends Model
        {
            protected $table = '_RefGameWorldGroup_Config';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'ID', 'GroupCodeName128', 'ValueCodeName128', 'Value', 'Type'
            ];

            protected $casts = [
                'Service' => 'integer',
        'ID' => 'integer',
    ];
        }