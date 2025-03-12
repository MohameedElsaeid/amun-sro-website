        <?php

        namespace App\Models;

        use Illuminate\Database\Eloquent\Model;

        class RefTrigger extends Model
        {
            protected $table = '_RefTrigger';
            public $timestamps = false;

            protected $fillable = [
                'Service', 'ID', 'CodeName128', 'IsActive', 'IsRepeat', 'Comment512', 'IndexNumber'
            ];

            protected $casts = [
                'Service' => 'integer',
        'ID' => 'integer',
        'IsActive' => 'integer',
        'IsRepeat' => 'integer',
        'IndexNumber' => 'integer',
    ];
        }