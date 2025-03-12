        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class SKGamebangIp extends Model
        {
            protected $table = 'SK_gamebang_ip';
            public $timestamps = false;

            protected $fillable = [
                'nID', 'ip', 'capacity'
            ];

            protected $casts = [
                'nID' => 'integer',
        'ip' => 'integer',
        'capacity' => 'integer',
    ];
        }