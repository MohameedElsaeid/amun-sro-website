        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class PWRestore extends Model
        {
            protected $table = 'PW_Restore';
            public $timestamps = false;

            protected $fillable = [
                'UserID', 'RandomPASS', 'createtime', 'ipaddr'
            ];

            protected $casts = [
                'createtime' => 'datetime',
    ];
        }