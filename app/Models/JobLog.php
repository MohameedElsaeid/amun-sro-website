        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class JobLog extends Model
        {
            protected $table = 'JobLog';
            public $timestamps = false;

            protected $fillable = [
                'UserJID', 'Amount', 'Limited', 'Date', 'TotalAmount', 'index'
            ];

            protected $casts = [
                'UserJID' => 'integer',
        'Amount' => 'integer',
        'Limited' => 'integer',
        'Date' => 'datetime',
        'TotalAmount' => 'integer',
        'index' => 'integer',
    ];
        }