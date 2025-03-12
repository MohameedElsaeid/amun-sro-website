        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class PayOp extends Model
        {
            protected $table = '_PayOp';
            public $timestamps = false;

            protected $fillable = [
                'ID', 'UserJID', 'Amount', 'Status'
            ];

            protected $casts = [
                'UserJID' => 'integer',
        'Amount' => 'integer',
        'Status' => 'boolean',
    ];
        }