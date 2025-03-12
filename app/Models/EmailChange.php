        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class EmailChange extends Model
        {
            protected $table = 'Email_Change';
            public $timestamps = false;

            protected $fillable = [
                'UserID', 'RandomPASS', 'createtime', 'ipaddr'
            ];

            protected $casts = [
                'createtime' => 'datetime',
    ];
        }